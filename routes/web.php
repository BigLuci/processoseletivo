<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProfileController@inicio');
Route::get('/profile', 'ProfileController@index');
// Route::get('/profile', 'ProfileController@create');
Route::get('/candidato/criar', 'CandidatoController@create');
// Route::store('/candidato/criar', 'CandidatoController@store');
