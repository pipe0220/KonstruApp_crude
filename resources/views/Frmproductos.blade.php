<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de producto</title>
</head>
<body>
    <form action="{{route('frmproductos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la id del producto
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese el nombre del producto
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese la descripcion del producto
            <br>
            <input type="text" name="descripcion">
            <br>
        </label>
        <label>
            Ingrese el precio del producto
            <br>
            <input type="text" name="precio">
            <br>
        </label>
        <label>
            Ingrese la cantidad del producto
            <br>
            <input type="text" name="stock">
            <br>
        </label>
        <label>
            Ingrese la marca del producto
            <br>
            <input type="text" name="marca">
            <br>
        </label>
        <label>
            Ingrese el modelo del producto
            <br>
            <input type="text" name="modelo">
            <br>
        </label>
        <label>
            Ingrese las dimensiones del producto
            <br>
            <input type="text" name="dimensiones">
            <br>
        </label>
        <label>
            Ingrese el pais de peso del producto
            <br>
            <input type="text" name="peso">
            <br>
        </label>
        <label>
            Ingrese la imagen del producto
            <br>
            <input type="text" name="imagen">
            <br>
        </label>
        <label>
            Ingrese la categoria del producto
            <br>
            <input type="text" name="categoria_id">
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
