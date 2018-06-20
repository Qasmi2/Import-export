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

// Excel file importing 

Route::get('importexport', 'ExcelController@importExport')->name('importexport')->middleware('auth');
Route::get('show', 'ExcelController@showResult')->name('show')->middleware('auth');
Route::post('update/{id}', 'ExcelController@editResult')->name('update')->middleware('auth');
Route::get('editing/{id}', 'ExcelController@edit')->name('editing')->middleware('auth');
Route::get('delete/{id}', 'ExcelController@deleteResult')->name('delete')->middleware('auth');
Route::get('deletesingle/{id}', 'ExcelController@deleteResultOne')->name('deletesingle')->middleware('auth');
Route::get('downloadexcel/{type}', 'ExcelController@downloadExcel')->name('downloadexcel')->middleware('auth');
Route::get('downloadcvs/{type}', 'ExcelController@downloadExcelSpecific')->name('downloadcvs')->middleware('auth');
Route::get('downloadsingle/{id}', 'ExcelController@downloadSingle')->name('downloadsingle')->middleware('auth');
Route::post('importexcel', 'ExcelController@importExcel')->name('importexcel')->middleware('auth');
Route::post('addrecord', 'ExcelController@importRecord')->name('addrecord')->middleware('auth');
Route::get('recordform', 'ExcelController@recordForm')->name('recordform')->middleware('auth');




// SEARCHING FILTER
Route::get('search', 'searchController@search')->name('search')->middleware('auth');
Route::post('searchname', 'searchController@filter')->name('searchname')->middleware('auth');
Route::get('customsearch', 'searchController@customSearch')->name('customsearch')->middleware('auth');

Route::get('setunset', 'searchController@sessionunset')->name('setunset')->middleware('auth');

Route::get('modelview/{id}', 'ExcelController@modelView')->name('modelview')->middleware('auth');