<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario estado de pedido</title>
</head>
<body>
    <form action="{{route('frmestado_pedido.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese el nombre
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese la descripcion
            <br>
            <input type="text" name="descripcion">
            <br>
        </label>


            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
