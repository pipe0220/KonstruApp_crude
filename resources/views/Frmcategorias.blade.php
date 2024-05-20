<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de categorias</title>
</head>
<body>
    <form action="{{route('frmcategorias.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la id de la categoria
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese el nombre de la categoria
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese descripcion de la categoria
            <br>
            <input type="text" name="descripcion">
            <br>
        </label>
        <label>
            Ingrese la id de la categoria padre
            <br>
            <input type="text" name="categoria_padre">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
