<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario compras</title>
</head>
<body>
    <form action="{{route('frmcompras.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id de la compra
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese la fecha de la compra
            <br>
            <input type="text" name="fecha_compra">
            <br>
        </label>
        <label>
            Ingrese el total de la compra
            <br>
            <input type="text" name="total">
            <br>
        </label>
        <label>
            Ingrese el id del proveedor
            <br>
            <input type="text" name="proveedor_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
