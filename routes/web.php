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

/* Route::get('/', function () {
return view('welcome');
}); */

Route::get('/', function () {
return view('frontpage');
});
/* Route::get('/review/{review}',function(){
return redirect('/');
})->where('review','[A-Za-z]+'); */

Route::resource('/user','UsersController');
Route::resource('/review','ReviewController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...



Route::get('admin-login', 'admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'admin\Auth\LoginController@login');



Route::group(['namespace' => 'admin', 'middleware' => 'auth:admin'],function(){


Route::get('admin/home','HomeController@index')->name('admin.home');

});
