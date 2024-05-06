<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario personas</title>
</head>
<body>
    <form action="{{route('frmpeople.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el primer nombre
            <br>
            <input type="text" name="name_1">
        </label>
        <label>
            Ingrese el segundo nombre
            <br>
            <input type="text" name="name_2">
        </label>
        <label>
            Ingrese el primer apellido
            <br>
            <input type="text" name="last_name_1">
        </label>
        <label>
            Ingrese el segundo apellido
            <br>
            <input type="text" name="last_name_2">
        </label>
        <label>
            Ingrese el numero de telefono
            <br>
            <input type="text" name="phone_1">
        </label>
        <label>
            Ingrese otro numero de telefono -opcional-
            <br>
            <input type="text" name="phone_2">
        </label>
        <label>
            Ingrese el correo electronico
            <br>
            <input type="text" name="email">
        </label>
        <label>
            Ingrese la fecha de nacimiento
            <br>
            <input type="text" name="birth_date">
        </label>
        <label>
            Ingrese el genero
            <br>
            <input type="text" name="gender">
        </label>
        <label>
            Ingrese el primer sexo
            <br>
            <input type="text" name="sex">
        </label>
        <label>
            Ingrese el departamento
            <br>
            <input type="text" name="departament">
        </label>
        <label>
            Ingrese la ciudad
            <br>
            <input type="text" name="city">
        </label>
        <label>
            Ingrese el pais
            <br>
            <input type="text" name="country">
        </label>
        <label>
            Ingrese la direccion
            <br>
            <input type="text" name="address">
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
