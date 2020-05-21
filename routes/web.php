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

Route::get('home/welcome','TestController@welcome');

Route::get('home/C','TestController@C');
Route::get('home/U','TestController@U');
Route::get('home/D','TestController@D');
Route::get('home/R','TestController@R');

Route::post('home/create','TestController@create');
Route::post('home/delete','TestController@delete');
Route::post('home/retrieve','TestController@retrieve');
Route::post('home/update','TestController@update');