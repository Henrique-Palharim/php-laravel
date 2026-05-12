<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aterroController extends Controller
{
    public function calculosCaminhao(Request $req)
    {
        $pesoBruto = (float) $req->input('pesoBruto');
        $tara = (float) $req->input('tara');
        $valorTonelada = (float) $req->input('valorTonelada');

        $pesoLiquido = $pesoBruto - $tara;
        if ($pesoLiquido < 0) {
            return back()->with('erro', 'Tara não pode ser maior que o peso bruto.');
        }
        $totalLiquido = $pesoLiquido * $valorTonelada;

        return view('view_calculos', compact('pesoLiquido', 'totalLiquido'));
    }
}