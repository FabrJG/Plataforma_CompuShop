<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','home')->name('home');

Route::view('prueba','prueba')->name('prueba');

Route::view('productos','productos')->name('productos');

Route::view('visitanos','visitanos')->name('visitanos');