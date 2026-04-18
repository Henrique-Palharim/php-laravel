<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tonelagem', function () {
    return view('view_tonelagem');
});

Route::post('/calc_tonelagem', ['uses'=>'App\Http\Controllers\aterroController@calculosCaminhao']);