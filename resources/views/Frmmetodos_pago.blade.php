<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario metodos de pago</title>
</head>
<body>
    <form action="{{route('frmmetodos_pago.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id del metodo de pago
            <br>
            <input type="text" name="id">
            <br>
        </label>
            <label>
                Ingrese el nombre del metodo de pago
                <br>
                <input type="text" name="nombre">
            </label>
            <label>
                Ingrese la descripcion
                <br>
                <input type="text" name="descripcion">
            </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
