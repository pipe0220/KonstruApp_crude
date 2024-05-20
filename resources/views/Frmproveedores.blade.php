<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario de proveedores</title>
</head>
<body>
    <form action="{{route('frmproveedores.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id del proveedor
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese el nombre del proveedor
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese la direccion del proveedor
            <br>
            <input type="text" name="direccion">
            <br>
        </label>
        <label>
            Ingrese el telefono del proveedor
            <br>
            <input type="text" name="telefono">
            <br>
        </label>
        <label>
            Ingrese el email del proveedor
            <br>
            <input type="text" name="email">
            <br>
        </label>
        <label>
            Ingrese el contacto del proveedor
            <br>
            <input type="text" name="contacto">
            <br>
        </label>
        <label>
            Ingrese la ciudad del proveedor
            <br>
            <input type="text" name="ciudad_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
