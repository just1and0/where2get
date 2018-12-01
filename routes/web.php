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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aproduct', 'HomeController@aproduct');
Route::post('/aaproduct', 'HomeController@aaproduct');
Route::get('/mproduct', 'HomeController@mproduct');
Route::get('/del/{id}', 'HomeController@delproduct');




// landing search page
Route::get('/search', 'MainController@search')->name('search');
Route::get('/addproduct', 'MainController@addproduct');
Route::post('/addproduct', 'MainController@aaddproduct');


Route::get('/listing', 'MainController@listing');
Route::get('/help', 'MainController@help');
Route::get('/donate', 'MainController@donate');

