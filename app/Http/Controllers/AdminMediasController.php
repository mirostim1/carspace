<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class AdminMediasController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('id', 'desc')->paginate(25);

        return view('admin.medias.index', compact('photos'));
    }

    public function deleteMedia(Request $request)
    {
        if(isset($request->multiple)) {

            if($request->checkBoxArray == null) {
                return redirect()->back();
            }

            $photos = Photo::findOrFail($request->checkBoxArray);

            foreach($photos as $photo){
                unlink(public_path() . $photo->path);
                $photo->delete();
            }

            session()->flash('selected_deleted', 'Selected photos have been deleted');
        }

        if(isset($request->single)) {

            $photo = Photo::findOrFail($request->photo_id);

            unlink(public_path() . $photo->path);

            $photo->delete();

            session()->flash('photo_deleted', 'Photo has been deleted');

        }

        return redirect('/admin/medias');
    }
}