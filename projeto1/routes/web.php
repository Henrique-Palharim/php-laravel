<?php

use Illuminate\Support\Facades\Route;

// rota raiz que retorna uma view - default do projeto
Route::get('/', function () {
    return view('welcome');
});

// rota que retorna uma frase
Route::get('/frase', function () {
    return '<h1>Bicudo manda, os demais obedecem</h1>';
});

// rota GET que retorna uma msg com parâmetro
Route::get('/cliente/{id?}', function ($id = null) {
    return "<h1>O id do cliente é $id</h1>"; // get com passagem de parametro
});

// testando uma nova view
Route::get('/bobesponja', function () {
    return view('bobesponja'); // bobesponja.blade.php
});

/* -------------------- Criando um POST com form -------------------- */

// acessando a págna do formulário
Route::get('/form-abrir', function () {
    return view('form'); // form.blade.php
});

// exibindo os dados obtidos no formulário
Route::post('/form-salvar', 
    ['uses'=>'App\Http\Controllers\FormController@salvarDados']
              // caminho           // arquivo     // função
);

/*
Route::post('/form-salvar', function () {
    dd($_POST);
    return "Recebi os dados!";
});
*/