@extends('layout.site')

@section('titulo', 'Alunos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Aluno</h3>

        @if ($errors->any())
            <div class="card red lighten-4 red-text text-darken-4" style="padding: 15px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <form action="{{ route('admin.alunos.salvar') }}" method="post" enctype="multipart/form-data">
                
                @csrf

                @include('admin.alunos._formAlunos')

                <br><br>
                <button type="submit" class="btn deep-orange">Salvar</button>

            </form>
        </div>
    </div>
@endsection