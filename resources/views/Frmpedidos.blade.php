<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario pedido</title>
</head>
<body>
    <form action="{{route('frmpedido.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el id
            <br>
            <input type="text" name="id">
            <br>
        </label>
        <label>
            Ingrese la fecha del pedido
            <br>
            <input type="text" name="fecha_pedido">
            <br>
        </label>
        <label>
            Ingrese el total
            <br>
            <input type="text" name="total">
            <br>
        </label>
        <label>
            Ingrese el id del cliente
            <br>
            <input type="text" name="cliente_id">
            <br>
        </label>
        <label>
            Ingrese el id del estado de pedido
            <br>
            <input type="text" name="estado_pedido_id">
            <br>
        </label>
        <label>
            Ingrese el id del metodo de pago
            <br>
            <input type="text" name="metodo_pago_id">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
