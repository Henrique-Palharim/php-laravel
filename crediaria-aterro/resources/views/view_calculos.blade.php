@extends('layout.site')

@section('conteudo')

<div style="padding:20px;">
    <h2>Resultado do Cálculo</h2>

    <p>Peso Líquido: <strong>{{ $pesoLiquido }} toneladas</strong></p>
    <p>Total a Pagar: <strong>R$ {{ number_format($totalLiquido, 2, ',', '.') }}</strong></p>
</div>

@endsection