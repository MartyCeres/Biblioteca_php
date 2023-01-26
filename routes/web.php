<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

/*Route::get('/', function(){
    return view('layout');
}); */

Route::get('/', 'App\Http\Controllers\PageController@getHomePage')->name('home');

Route::get('/libri', 'App\Http\Controllers\PageController@getLibriPage')->name('libri');

Route::get('/lettori', 'App\Http\Controllers\PageController@getLettoriPage')->name('lettori');

Route::get('/prestiti', 'App\Http\Controllers\PageController@getPrestitiPage')->name('prestiti');

Route::post('/login', 'App\Http\Controllers\UserController@post_Login')->name('login');

Route::post('/logout', 'App\Http\Controllers\UserController@post_Logout')->name('logout');

Route::post('/modificaUtente', 'App\Http\Controllers\UserController@postEditUser')->name('modificaUtente');
Route::get('/profilo', 'App\Http\Controllers\PageController@getProfiloPage')->name('profilo');
