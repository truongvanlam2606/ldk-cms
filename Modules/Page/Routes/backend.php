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

Route::prefix('page')->name('dashboard.page::')->group(function () {
    Route::get('/', 'IndexController')->name('index');
    Route::get('create', 'CreateController')->name('create');
    Route::post('store', 'StoreController')->name('store');
    Route::get('edit/{id}', 'EditController')->name('edit');
    Route::put('update/{id}', 'UpdateController')->name('update');
    Route::delete('delete/{id}', 'DeleteController')->name('delete');
});
