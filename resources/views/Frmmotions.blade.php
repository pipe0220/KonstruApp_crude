<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('frmmotionss.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el nombre
            <br>
            <input type="text" name="name">
        </label>
        <label>
            Ingrese la descripcion
            <br>
            <input type="text" name="description">
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
