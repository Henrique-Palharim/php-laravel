<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abrir-form', function () {
    return view('form');
});

Route::post('/salvar-form', ['uses'=>'App\Http\Controllers\ContatoController@index']);