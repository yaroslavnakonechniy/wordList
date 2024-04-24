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
    return view('layouts.app');
});

Route::group(['namespace' => 'Word'], function (){
    Route::get('/words', 'IndexController')->name('words.index');
    
});
Route::group(['namespace' => 'Word'], function () {
    Route::get('/words/english', 'IndexController')->name('words.index');
    Route::get('/words/polish', 'PolishController')->name('words.polish');
    Route::get('/words/create', 'CreateController')->name('words.create');
    Route::post('/words/store', 'StoreController')->name('words.store');
    Route::get('/words/show', 'ShowController')->name('words.show');
    Route::get('/words/{id}/edit', 'EditController')->name('words.edit');
    Route::post('/words/{id}/update', 'UpdateController')->name('words.update');
    Route::get('/words/{id}/delete', 'DestroyController')->name('words.destroy');

});

