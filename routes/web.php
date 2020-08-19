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

use App\Http\Controllers\AdminUserController;
use App\User;
use App\Role;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    // return view('welcome');

    // echo  App\User::find(1)->role()->get();

});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/admin',function(){

    $user = Auth::user();


    return view('admin.index',compact('user'));


})->name('home');


Route::group(['middleware'=>'admin'],function(){


    Route::resource('/admin/users','AdminUserController');

    Route::resource('/admin/posts','AdminPostsController');



});




