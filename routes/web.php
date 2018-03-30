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

Route::get('/', function () {
    return view('index');
});

Route::get('journal', 'JournalController@index');
Route::post('journal/save', [
    'as' => 'journal.save',
    'uses' => 'JournalController@store'
]);


// TODO:complete auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
