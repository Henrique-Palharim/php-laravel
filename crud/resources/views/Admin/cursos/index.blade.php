@extends('layout.sit')
@section('titulo', 'Cursos')
@section('conteudo')

@foreach($linha in $linha)
    echo $linha[$descricao]
@endforeach

@endsection