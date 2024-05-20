<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de ciudades</title>
</head>
<body>
    <form action="{{route('frmciudades.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la id de la ciudad
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese el nombre de la ciudad
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese la id del departamento
            <br>
            <input type="text" name="departamento_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
