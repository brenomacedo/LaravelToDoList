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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login')->name('login/do');
Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@register')->name('register/do');
Route::get('/todolist', 'TodolistController@index')->name('todolist');
Route::get('/todolist/logout', 'TodolistController@logout')->name('logout');