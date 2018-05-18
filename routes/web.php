<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', 'UserController@profile');

Route::post('/profile', 'UserController@update_avatar');

Route::get('/credential', 'CredentialController@credential');

Route::post('/credential','CredentialController@credential']);

Route::get('/scholarship', 'UserController@scholarship');

Route::get('insert','StudInsertController@insertform');

Route::post('create','StudInsertController@insert');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

