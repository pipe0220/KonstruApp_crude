<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario cuerpo de documento</title>
</head>
<body>
    <form action="{{route('frminventories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la cantidad
            <br>
            <input type="text" name="quantity">
        </label>
        <label>
            Ingrese el total
            <br>
            <input type="text" name="total">
        </label>
        <label>
            Ingrese la id del inventario
            <br>
            <input type="text" name="inventory_id">
        </label>
        <label>
            Ingrese la id de la cabeza de documento
            <br>
            <input type="text" name="heads_id">
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
