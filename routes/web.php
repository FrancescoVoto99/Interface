<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/interfaces', 'App\Http\Controllers\InterfacesController@interface')
        ->name('interface');

Route::get('interface','App\Http\Controllers\InterfaceController@index');
Route::get('/message','App\Http\Controllers\InterfaceController@getMessage');
Route::get('/albero','App\Http\Controllers\InterfaceController@getAlbero');
Route::get('/kpi','App\Http\Controllers\InterfaceController@getKpi');
Route::get('/subsystem','App\Http\Controllers\InterfaceController@getSubsystem');
Route::get('/kpihistory','App\Http\Controllers\InterfaceController@getKpiHistory');
