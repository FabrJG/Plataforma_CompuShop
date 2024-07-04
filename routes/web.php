<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio','App\Http\Controllers\MiPerfilController@index')->name('home.index');

Route::view('prueba','prueba')->name('prueba');

Route::view('productos','productos')->name('productos');

Route::view('visitanos','visitanos')->name('visitanos');

Route::view('ofertas','ofertas')->name('ofertas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
