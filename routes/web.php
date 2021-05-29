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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@select');
Route::get('/selectwhere0226', 'PagesController@selectwhere');
Route::get('/selectjoin0226', 'PagesController@selectjoin');
Route::get('/joinwhere0226', 'PagesController@joinwhere');

//database
Route::get('/', 'DbController@index');
Route::get('/selectwhere0226', 'WhereController@index');
Route::get('/selectjoin0226', 'JoinController@index');
Route::get('/joinwhere0226', 'JoWhereController@index');

