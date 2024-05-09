<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario inventario</title>
</head>
<body>
    <form action="{{route('frminventories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese la cantidad inicial
            <br>
            <input type="text" name="initial_quantity">
        </label>
        <label>
            Ingrese la cantidad final
            <br>
            <input type="text" name="final_quantity">
        </label>
        <label>
            Ingrese la cantidad actual
            <br>
            <input type="text" name="current_quantity">
        </label>
        <label>
            Ingrese el lote
            <br>
            <input type="text" name="lot">
        </label>
        <label>
            Ingrese el precio de compra
            <br>
            <input type="text" name="purchase_price">
        </label>
        <label>
            Ingrese el precio de venta
            <br>
            <input type="text" name="selling_price">
        </label>
        <label>
            Ingrese el porcentaje de ganancia
            <br>
            <input type="text" name="profit_percentage">
        </label>
        <label>
            Ingrese la fecha de fabricacion
            <br>
            <input type="text" name="preparation_date">
        </label>
        <label>
            Ingrese la fecha de expiracion
            <br>
            <input type="text" name="expiration_date">
        </label>
        <label>
            Ingrese la id del movimiento
            <br>
            <input type="text" name="motions_id">
        </label>
        <label>
            Ingrese la id de la tienda
            <br>
            <input type="text" name="stores_id">
        </label>
        <label>
            Ingrese la id del producto
            <br>
            <input type="text" name="products_id">
        </label>
        <label>
            Ingrese el id del cliente
            <br>
            <input type="text" name="people_id">
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>

</body>
</html>
