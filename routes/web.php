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
})->name('home');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fees', 'FeesController@index')->name('fees');
Route::get('/students', 'StudentsController@index')->name('students');
Route::post('/students', 'StudentsController@storeStudent')->name('createStudent');
Route::post('/fees', 'FeesController@createFee')->name('createFee');