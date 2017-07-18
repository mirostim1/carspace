<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/logout', 'AdminUsersController@logout')->name('logout');

Route::get('/freespaces', 'SpacesController@index');


Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin');

    Route::resource('admin/users', 'AdminUsersController', ['names' => [
        'index'  => 'admin.users.index',
        'create' => 'admin.users.create',
        'store'  => 'admin.users.store',
        'edit'   => 'admin.users.edit'
    ]]);

    Route::get('/admin/history', 'SpacesController@showHistory')->name('history');

    Route::get('/admin/history/details/{id}', 'SpacesController@showDetails')->name('details');

    Route::delete('/admin/deleteHistory', 'SpacesController@deleteHistory');

    Route::resource('admin/medias', 'AdminMediasController', ['names' => [
        'index'  => 'admin.medias.index'
    ]]);

    Route::delete('/admin/deleteMedia', 'AdminMediasController@deleteMedia');

});


