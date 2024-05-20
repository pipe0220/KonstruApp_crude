<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario de detalle de compras</title>
</head>
<body>
    <form action="{{route('frmdetalle_compra.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id del detalle de la compra
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese la cantidad
            <br>
            <input type="text" name="cantidad">
            <br>
        </label>
        <label>
            Ingrese el precio unitario
            <br>
            <input type="text" name="precio_unitario">
            <br>
        </label>
        <label>
            Ingrese el id de la compra
            <br>
            <input type="text" name="compra_id">
            <br>
        </label>
        <label>
            Ingrese el id del producto
            <br>
            <input type="text" name="producto_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
