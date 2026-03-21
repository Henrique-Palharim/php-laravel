<form action="/salvar-form" method="post">

    @csrf
    <label for="nome">Nome: </label>
    <input type="text" name="nome">

    <label for="celular">Celular: </label>
    <input type="text" name="celular">

    <input type="submit" value="Enviar">
    
</form>