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

Route::prefix('procrm')->group(function() {
    Route::get('/', 'ProcrmController@index');

    Route::prefix('leads')->group(function() {

    Route::get('/', 'ProcrmController@leads');
    Route::get('/lead', 'ProcrmController@lead');
    Route::get('/form', 'ProcrmController@form');
});
});
