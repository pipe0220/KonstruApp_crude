<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('frmheads.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la fecha
            <br>
            <input type="text" name="date">
        </label>
        <label>
            Ingrese el valor total
            <br>
            <input type="text" name="total value">
        </label>
        <label>
            Ingrese el id de la persona
            <br>
            <input type="text" name="people_id">
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
