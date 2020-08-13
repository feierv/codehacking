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
use App\User;
use App\Role;

Route::get('/', function () {
    // return view('welcome');

    // echo  App\User::find(1)->role()->get();

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin',function(){


    return view('admin.index');


});



Route::resource('/admin/users', 'AdminUserController');
