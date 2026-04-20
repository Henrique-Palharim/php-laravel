@extends('layout.site')

@section('conteudo')
    
    <form action="calc_tonelagem" method="post">

        @csrf
        <h2>Insira os Dados</h2>

        <label for="pesoBruto">Peso Bruto: </label>
        <input type="number" name="pesoBruto" id="pesoBruto">

        <label for="tara">Tara: </label>
        <input type="number" name="tara" id="tara">

        <label for="valorTonelada">Valor da Tonelada: </label>
        <input step="0.01" type="number" name="valorTonelada" id="valorTonelada">

        <input type="submit" value="Calcular">

    </form>

@endsection