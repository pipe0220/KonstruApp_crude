<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de departamentos</title>
</head>
<body>
    <form action="{{route('frmdeparatamentos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la id del departamento
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese el nombre del departamento
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese el id del pais
            <br>
            <input type="text" name="pais_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
