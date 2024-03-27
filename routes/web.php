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
Route::get('/gemmes', "GemmeController@index");
Route::get('/gemmes/{gemme}', "GemmeController@show")->where(['gemme' => '[0-9]+']);

Route::get('/admin', 'GemmeController@indexAdmin');
Route::get('/admin/{gemme}', 'GemmeController@adminInfo')->where(['gemme' => '[0-9]+']);
Route::get('/admin/create', 'GemmeController@create');
Route::post('/admin/create', 'GemmeController@store');

Route::get('/admin/{gemme}/edit', 'GemmeController@edit')->where(['gemme' => '[0-9]+']);
Route::post('/admin/{gemme}/edit', 'GemmeController@update')->where(['gemme' => '[0-9]+']);
Route::get('/admin/{gemme}/destroy', 'GemmeController@destroy')->where(['gemme' => '[0-9]+']);

Route::get('/admin/installer', "AppController@installer");

