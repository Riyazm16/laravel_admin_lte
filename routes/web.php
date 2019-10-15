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
    return view('dashboards/dashboardV1');
});

Route::get('dashboards/{routeName}','CustomRouter@loadView')->name('dashboards');
Route::get('widgets','CustomRouter@loadView')->name('widgets');
Route::get('layouts/{routeName}','CustomRouter@loadView')->name('layouts');
Route::get('charts/{routeName}','CustomRouter@loadView')->name('charts');
Route::get('UI/{routeName}','CustomRouter@loadView')->name('UI');
Route::get('forms/{routeName}','CustomRouter@loadView')->name('forms');
Route::get('tables/{routeName}','CustomRouter@loadView')->name('tables');
Route::get('examples/{routeName}','CustomRouter@loadView')->name('examples');
Route::get('mailbox/{routeName}','CustomRouter@loadView')->name('mailbox');