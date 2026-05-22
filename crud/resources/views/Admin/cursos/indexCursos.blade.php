@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<div class='container'>
 <h3 class='center'>Lista de Cursos</h3>
    <div class='linha'>
        <table>
            <thead>
                <tr>  <!-- CABECALHO -->
                    <td>Id</td><td>Titulo</td><td>Descrição</td>
                    <td>Publicado</td><td>Valor</td>
                    <td>Imagem</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
            @foreach($linhas as $linha)   <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td>{{ $linha->id }}</td><td>{{ $linha->titulo }}</td><td>{{ $linha->descricao }}</td>
                    <td>{{ $linha->publicado }}</td><td>{{ $linha->valor }}</td>
                    <td><img height="50" src="{{ asset($linha->imagem) }}" alt="{{ $linha->titulo }}"></td>
                    <td>   <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('admin.cursos.editar',$linha->id) }}">Alterar</a>
                        <a class='btn rede' href="{{ route('admin.cursos.excluir',$linha->id) }}">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>   
    </div>
    <div class='linha'>  <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.cursos.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection 