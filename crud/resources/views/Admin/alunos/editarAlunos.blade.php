@extends('layout.site')

@section('titulo', 'Editar Aluno')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editar Aluno</h3>

        <div class="row">
            <form action="{{ route('admin.alunos.atualizar', $linha->id) }}"
                  method="post"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                @include('admin.alunos._formAlunos')

                <br><br>
                <button type="submit" class="btn deep-orange">Atualizar</button>

            </form>
        </div>
    </div>
@endsection