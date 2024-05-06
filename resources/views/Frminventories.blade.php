<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario inventario</title>
</head>
<body>
    <form action="{{route('frmproducts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el nombre del producto
            <br>
            <input type="text" name="name">
        </label>
        <label>
            Ingrese el precio del producto
            <br>
            <input type="text" name="price">
        </label>
        <label>
            Ingrese la descripcion del producto
            <br>
            <input type="text" name="description">
        </label>
        <label>
            Ingrese la cantidad del producto
            <br>
            <input type="text" name="amount">
        </label>
        <label>
            Ingrese la marca del producto
            <br>
            <input type="text" name="brand">
        </label>
        <label>
            Ingrese el modelo del producto
            <br>
            <input type="text" name="model">
        </label>
        <label>
            Ingrese las medidas del producto
            <br>
            <input type="text" name="measurements">
        </label>
        <label>
            Ingrese el pais de origen del producto
            <br>
            <input type="text" name="trade mark">
        </label>
        <label>
            Ingrese la categoria del producto
            <br>
            <input type="text" name="catproductos_id">
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
