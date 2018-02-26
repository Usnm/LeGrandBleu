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
    return view('welcome');
});

Auth::routes();

Route::get('profile', function () {

})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{usr_login}',[
    'uses' => 'UserController@index',
    'as' => 'user-page'
])->where('usr_login','^[a-z]+[.][a-z]+[0-9]+?$');
