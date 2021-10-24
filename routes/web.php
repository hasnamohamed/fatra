<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Backend')->prefix('admin')->group(function(){
    Route::get('/', 'Home@index')->name('admin.home');
    Route::resource('users', 'Users')->except('show','delete');
    Route::resource('posts', 'Posts')->except('show','delete');
});
Route::namespace('Frontend')->prefix('')->group(function(){
    // Route::get('/', 'Home@index');
});
