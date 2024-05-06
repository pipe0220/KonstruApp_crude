<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario tiendas</title>
</head>
<body>
    <form action="{{route('frmstores.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el nombre de la tienda
            <br>
            <input type="text" name="name">
        </label>
        <label>
            Ingrese el precio de la empresa
            <br>
            <input type="text" name="companies_id">
        </label>
        <label>
            Ingrese el nombre de la ciudad
            <br>
            <input type="text" name="cities_id">
        </label>

            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
