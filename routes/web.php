<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/;
//Route::namespace('Front')->group(function () {

//   Route::get('users', 'UserController@showAdminName');
//});


Route::get('showString/{id?}', function () {
    return "welcomefromshowString";
})->name("b");


Route::get('check', function () {
    return "middleware";
})->name("c");

Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::get('second', 'controller@showString');
    Route::get('users', 'Front\UserController@showAdminName')->middleware('auth');
});
Route::get('login', function () {
    return "not authorized user";
})->name("login");
Route::view('contact-me', 'contact', [
    'page_name' => 'contact mr pg',
    'page_desc' => 'this is desc'
]);


Route::get('/', function () {
    return view('auth\register');
});

Route::resource('news', '\App\Http\Controllers\NewsController');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);
/*
email verification
trip mail
env
user model
web.php middleware(verified)
verify.blade.php
*/
