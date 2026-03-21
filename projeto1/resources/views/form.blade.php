<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    

    <form action="/form-salvar" method="post"> <!-- action daqui deve ser o mesmo da rota com post -->
    @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="celular">Celular</label>
        <input type="text" name="celular">

        <input type="submit" value="Enviar">
    </form>

    @if(isset($dados))
        <h2>Contatos</h2>
        <ul>
            @foreach($dados as $contato)
                <li>{{ $contato['nome'] }} - {{ $contato['cel'] }}</li>
            @endforeach
        </ul>
    @endif


</body>
</html>