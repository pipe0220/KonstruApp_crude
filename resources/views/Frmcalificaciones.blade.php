<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario calificaciones</title>
</head>
<body>
    <form action="{{route('frmcalificaciones.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id del detalle de la compra
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese la puntuacion
            <br>
            <input type="text" name="puntuacion">
            <br>
        </label>
        <label>
            Ingrese el comentario
            <br>
            <input type="text" name="comentario">
            <br>
        </label>
        <label>
            Ingrese el id de la fecha
            <br>
            <input type="text" name="fecha_calificacion">
            <br>
        </label>
        <label>
            Ingrese el id del cliente
            <br>
            <input type="text" name="cliente_id">
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
