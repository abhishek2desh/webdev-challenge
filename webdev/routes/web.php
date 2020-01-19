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

Route::view('/', 'home')->name('index');
Route::post('upload', 'FileController@upload')->name('upload');
Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');Route::get('customers', 'CustomersController@index')->name('customers.index');

Route::get('customers/create', 'CustomersController@create')->name('customers.create');
Route::post('customers', 'CustomersController@store')->name('customers.store');
Route::get('customers/{customer}', 'CustomersController@show')->name('customers.show')->middleware('can:view,customer');
Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
Route::patch('customers/{customer}', 'CustomersController@update')->name('customers.update');
Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');

Route::view('about', 'about')->name('about');
Auth::routes();
Route::get('/home', 'FileController@index')->name('home');

