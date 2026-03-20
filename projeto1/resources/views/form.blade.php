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

        Nome
        <input type="text" name="nome">

        Celular
        <input type="text" name="celular">

        <input type="submit" value="Enviar">
    </form>


</body>
</html>