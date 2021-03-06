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

// Route::post('/home/create', function  () {
//     return view('create');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home','chatCreate@createChat')->name('home');

Route::get('/home/create','chatCreate@showChats')->name('create');

Route::get('/home','showUsers@showUsers')->name('home');
