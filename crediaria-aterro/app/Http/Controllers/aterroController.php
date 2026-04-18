<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aterroController extends Controller
{
    public function calculosCaminhao(Request $req)
    {
        $pesoBruto = $req->input('pesoBruto');
        $tara = $req->input('tara');
        $valorTonelada = $req->input('valorTonelada');

        $pesoLiquido = $pesoBruto - $tara;
        $totalLiquido = $pesoLiquido * $valorTonelada;

        return view('view_calculos', compact('pesoLiquido', 'totalLiquido'));
    }
}