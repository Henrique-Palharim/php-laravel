<div class="input-field">
    <input type="text" name="nome"
           value="{{ isset($linha->nome) ? $linha->nome : '' }}">
    <label class="active">Nome</label>
</div>

<div class="input-field">
    <input type="text" name="celular"
           value="{{ isset($linha->celular) ? $linha->celular : '' }}">
    <label class="active">Celular</label>
</div>

<!-- SELECT CURSO -->
<div class="input-field">
    <select name="id_curso" class="browser-default">
        <option value="" disabled selected>Selecione o curso</option>

        @foreach(\App\Models\Curso::all() as $curso)
            <option value="{{ $curso->id }}"
                {{ isset($linha->id_curso) && $linha->id_curso == $curso->id ? 'selected' : '' }}>
                {{ $curso->titulo }}
            </option>
        @endforeach
    </select>
</div>

<!-- IMAGEM -->
<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="arquivo">
    </div>

    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($linha->imagem))
    <div class="input-field">
        <img width="120" src="{{ asset($linha->imagem) }}">
    </div>
@endif