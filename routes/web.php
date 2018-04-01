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

Route::get('page', 'PageController@index');
Route::post('page/save', [
    'as' => 'page.save',
    'uses' => 'PageController@store'
]);

Route::get('journal', 'JournalController@index');
Route::get('journal/create', 'JournalController@create');


// TODO:complete auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
