<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // o Request $req serve para receber os dados da requisição HTTP, ou seja, tudo que vem do formulário
    public function salvarDados(Request $req)
    {
        echo "Aqui o Banco de Dados vai salvar os dados do form<br> 
        nome do bicho: $req[nome]<br>
        celular do bicho: $req[celular]";
        // tem que usar o "name" do form

        dd($req);
    }
}