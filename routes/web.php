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

Route::get('/settings','SettingsController@index');
Route::post('/brands','SettingsController@storebrand');
Route::post('/types','SettingsController@storetype');
Route::post('/subtypes','SettingsController@storesubtype');

Route::delete('brands/{id}',array('uses' => 'SettingsController@deletebrand', 'as' => 'brand.delete'));
Route::delete('types/{id}',array('uses' => 'SettingsController@deletetype', 'as' => 'type.delete'));
Route::delete('subtypes/{id}',array('uses' => 'SettingsController@deletesubtype', 'as' => 'subtype.delete'));

Route::resource('vehicles','VehiclesController');
Route::resource('suppliers','SupplierController');


