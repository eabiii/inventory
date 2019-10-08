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
Route::get('/dashboard', 'ProductsController@index')->name('dashboard');
Route::get('/addInventory', 'PagesController@addInventory')->name('addInventory');
//Route::get('/viewInventory', 'PagesController@viewInventory')->name('viewInventory');
Route::post('/viewInventory/create', 'ProductsController@create')->name('addInventorytoDB');