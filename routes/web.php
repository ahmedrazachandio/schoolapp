<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\User;
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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard');
Route::get('/dashboard2', 'App\Http\Controllers\HomeController@dashboard2');
Route::get('/dashboard3', 'App\Http\Controllers\HomeController@dashboard3');

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
