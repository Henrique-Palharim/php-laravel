@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <h3 style="color: #298dffff">Lista de Contatos</h3>

    @foreach($contatos as $contato)

        <div style="margin-bottom: 10px;">
            <strong>Nome:</strong> {{ $contato['nome'] }} <br>
            <strong>Celular:</strong> {{ $contato['celular'] }}
        </div>
        
    @endforeach
@endsection