@extends('layout.site')

@section('titulo','Alunos')

@section('conteudo')

<div class='container'>
    <h3 class='center'>Lista de Alunos</h3>

    <div class='linha'>
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Celular</td>
                    <td>Curso</td>
                    <td>Imagem</td>
                    <td>Ação</td>
                </tr>
            </thead>

            <tbody>
            @foreach($linhas as $linha)
                <tr>
                    <td>{{ $linha->id }}</td>
                    <td>{{ $linha->nome }}</td>
                    <td>{{ $linha->celular }}</td>

                    <!-- curso (precisa relacionamento ou join depois) -->
                    <td>{{ $linha->id_curso }}</td>

                    <td>
                        @if($linha->imagem)
                            <img height="50" src="{{ asset($linha->imagem) }}" alt="{{ $linha->nome }}">
                        @endif
                    </td>

                    <td>
                        <a class='btn deep-orange' href="{{ route('admin.alunos.editar',$linha->id) }}">Alterar</a>

                        <a class='btn red' href="{{ route('admin.alunos.excluir',$linha->id) }}">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class='linha'>
        <a class='btn blue' href="{{ route('admin.alunos.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection