<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario clientes</title>
</head>
<body>
    <form action="{{route('frmclientes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id del cliente
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
            Ingrese el apellido
            <br>
            <input type="text" name="apellido">
            <br>
        </label>
        <label>
            Ingrese el email
            <br>
            <input type="text" name="email">
            <br>
        </label>
        <label>
            Ingrese la contraseña
            <br>
            <input type="text" name="contraseña">
            <br>
        </label>
        <label>
            Ingrese el telefono
            <br>
            <input type="text" name="telefono">
            <br>
        </label>
        <label>
            Ingrese la direccion de envio
            <br>
            <input type="text" name="direccion_envio">
            <br>
        </label>
        <label>
            Ingrese la ciudad de envio
            <br>
            <input type="text" name="ciudad_envio_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
