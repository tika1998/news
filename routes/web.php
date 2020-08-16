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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/allNews', function () {
    return view('admin.allNews');
});

Route::get('/adminPan', function () {
    return view('admin.layoutsAd.app');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
