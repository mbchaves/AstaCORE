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

Route::prefix('procms')->group(function() {
    Route::get('/', 'ProcmsController@index');
    Route::get('/blog', 'ProcmsController@blog');
    Route::post('/blog/save', 'ProcmsController@blog');
});
