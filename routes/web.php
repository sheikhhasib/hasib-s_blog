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
    return view('resource.dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('resouce','DocumentController@resouce');
Route::post('resource/store','DocumentController@resourceStore');
Route::get('resource/list','DocumentController@resourceList');
