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

Route::get('/interface', 'App\Http\Controllers\InterfaceController@interface')
        ->name('interface');

Route::get('firebase','App\Http\Controllers\FirebaseController@index');
Route::get('/message','App\Http\Controllers\FirebaseController@getMessage');
Route::get('/albero','App\Http\Controllers\FirebaseController@getAlbero');
Route::get('/kpi','App\Http\Controllers\FirebaseController@getKpi');
Route::get('/subsystem','App\Http\Controllers\FirebaseController@getSubsystem');
