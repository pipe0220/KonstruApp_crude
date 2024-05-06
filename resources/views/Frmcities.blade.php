<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de ciudades</title>
</head>
<body>
    <form action="{{route('frmcities.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el nombre de la ciudad
            <br>
            <input type="text" name="name">
        </label>
        <label>
            Ingrese el departemento de la ciudad
            <br>
            <input type="text" name="departament_id">
        </label>

            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
