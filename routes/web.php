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

Route::get('/ejercicio1', 'Ejercicio1Controller@index')->name('index_ejercicio1');

Route::post('/ejercicio1/enviar_datos', 'Ejercicio1Controller@calculoEjercicio1')->name('ejercicio1');

Route::get('/ejercicio2', 'Ejercicio2Controller@index')->name('index_ejercicio2');

Route::post('/ejercicio2/enviar_datos', 'Ejercicio2Controller@calculoEjercicio2')->name('ejercicio2');
