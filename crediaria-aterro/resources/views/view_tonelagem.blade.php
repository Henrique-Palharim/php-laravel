<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        input {
            display: block;
            margin-bottom: 20px;
        }
    </style>

</head>
<body>
    
    <form action="calc_tonelagem" method="post">

    @csrf
    <h2>Insira os dados solicitados</h2>

    <label for="pesoBruto">Peso Bruto: </label>
    <input type="number" name="pesoBruto" id="pesoBruto">

    <label for="tara">Tara: </label>
    <input type="number" name="tara" id="tara">

    <label for="valorTonelada">Valor da Tonelada: </label>
    <input step="0.01" type="number" name="valorTonelada" id="valorTonelada">

    <input type="submit" value="Calcular">

</form>

</body>
</html>