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
Route::get('/f1', function () {
    return view('f1');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/log', function () {
    return view('log');
});
Route::get('/sign', function () {
    return view('sign');
});
Route::get('/p1', function () {
    return view('p1');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/potato', function () {
    return view('potato');
});


