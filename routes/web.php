<?php

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

Route::resource('/post', 'App\Http\Controllers\PostController');
Route::resource('/user', 'App\Http\Controllers\ PostController');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
})->name('login');
