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

/* AUTHORIZATION */
Auth::routes();

/* INDEX */
Route::get('/', function () {
    return view('welcome');
});

/* ADMIN */
Route::get('/admin', 'Admin\AdminController@index')->middleware('admin')->name('admin');

