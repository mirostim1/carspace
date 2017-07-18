<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminCreateUserRequest;
use App\Http\Requests\AdminEditUserRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    public function index()
    {
        $users = User::all()->sortByDesc('id');

        return view('admin.users.index', compact('users', 'roles'));
    }

    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.create', compact('roles'));
    }

    public function store(AdminCreateUserRequest $request)
    {
        $input = $request->all();

        if($request->file('photo_id')) {
            $file = $request->file('photo_id');
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['path' => $name]);
            $input['photo_id'] = $photo->id;
        }

        $input['password'] = bcrypt($input['password']);

        User::create($input);

        session()->flash('user_created', 'User has been created');

        return redirect('/admin/users');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(AdminEditUserRequest $request, $id)
    {
        $input = $request->all();

        $user = User::findOrFail($id);

        if($request->file('photo_id')) {
            $file = $request->file('photo_id');
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['path' => $name]);
            $input['photo_id'] = $photo->id;
        }

        if(!$request->password) {
            $input['password'] = $user->password;
        }

        $user->update($input);

        session()->flash('user_updated', 'User has been updated');

        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $photo = Photo::find($user->photo_id);

        if($photo) {
            unlink(public_path() . '/images/' . $photo->path);
            $photo->delete();
        }

        $user->delete();

        session()->flash('user_deleted', 'User has been deleted');

        return redirect('/admin/users');
    }

    public function logout() {
        session()->flush();

        return redirect('/');
    }

    /*
    public function login(Request $request) {

        $user = User::all()->where('email', '=', $request->email)->first();

        if($request->email == null || $request->email == '' || $request->password == null || $request->password == '') {
            return 3;
        }

        if($user) {
            if(Hash::check($request->password, $user->password)) {

                if ($user->role_id == 1 && $user->is_active == 1) {
                    session(['login' => 1]);
                    return 1;
                }

                if ($user->role_id == 2 && $user->is_active == 1) {
                    session(['login' => 2]);
                    return 2;
                }
            } else {
                return 4;
            }
        }

        return 4;
    }
    */

    /*
    public function logoff() {
        session()->forget('login');

        return redirect('/');
    }
    */
}