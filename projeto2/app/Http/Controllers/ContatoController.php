<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function index(Request $req)
    {
        // adiciona contatos manualmente se não tiver nenhum
        if (empty($contatos))
        {
            $contatos = [
                ['nome'=>'Maria','celular'=>'1234567890'],
                ['nome'=>'João','celular'=>'0987654321']
            ];
        }

        $contatos[] = ['nome'=>$req->nome, 'celular'=>$req->celular];
        /* 
            $req->nome, $req->celular
            são os valores vindos do form, nos campos "nome" e "celular"
        */

        return view('contatos.index', compact('contatos')); // contatos.index = pasta/nome_do_arquivo
    }

}