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

//Route::post('/iscrizione', 'App\Http\Controllers\UserController@post_iscrizione')->name('iscrizione')->middleware('roles');
Route::post('/iscrizione',[
    'uses'=>'App\Http\Controllers\UserController@post_iscrizione',
    'as'=> 'iscrizione',
    'middleware' => 'roles',
    'roles'=> 'admin'
]);

//Route::post('/signin', 'App\Http\Controllers\UserController@post_Login')->name('signin');

//Route::post('/logout', 'App\Http\Controllers\UserController@post_Logout')->name('logout');

//Route::post('/assegnoRuolo', 'App\Http\Controllers\UserController@post_AssegnoRuolo')->name('assegnoRuolo');
Route::post('/assegnoRuolo',[
    'uses'=>'App\Http\Controllers\UserController@post_AssegnoRuolo',
    'as'=> 'assegnoRuolo',
    'middleware' => 'roles',
    'roles'=> 'admin'
]);

//Route::post('/cancellaUtente', 'App\Http\Controllers\UserController@postDeleteUser')->name('cancellaUtente');
Route::post('/cancellaUtente',[
    'uses'=>'App\Http\Controllers\UserController@postDeleteUser',
    'as'=> 'cancellaUtente',
    'middleware' => 'roles',
    'roles'=> 'admin'
]);

Route::get('/gestioneUtenti', 'App\Http\Controllers\PageController@getGestioneUtentiPage')->name('gestioneUtenti');
/*Route::get('/gestioneUtenti', [
    'uses'=>'App\Http\Controllers\PageController@getGestioneUtentiPage',
    'as'=>'gestioneUtenti',
    'middleware' => 'roles',
    'roles'=> 'admin'
]);*/

//---------------- gestionePrestiti -----------------
Route::get('/gestionePrestiti', 'App\Http\Controllers\PageController@getPrestitiPage')->name('gestionePrestiti');

Route::get('/posizionilibri', 'App\Http\Controllers\PageController@getPosizioniLibriPage')->name('posizionilibri');
