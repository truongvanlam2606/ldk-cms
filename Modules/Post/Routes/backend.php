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

Route::prefix('post')->name('post::')->group(function () {
    Route::get('/', 'ListController')->name('index');
    Route::get('/create', 'CreateController')->name('create');
    Route::post('/store', 'StoreController')->name('store');
});
