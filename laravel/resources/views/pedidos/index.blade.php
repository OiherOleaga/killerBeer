<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KillerBeer</title>
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>
<body>
    <form action="">
        <label for="id_cliente">id_cliente</label>
        <input type="text">

        <label for="id_cliente">id_cliente</label>
        <input type="text">
    </form>

    <table>
        <tr>
            <th>
                id
            </th>
            <th>
                id_cliente
            </th>
            <th>
                estado
            </th>
            <th>
                fecha_entrega
            </th>
            <th>
                precio
            </th>
        </tr>

        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{$pedido["id"]}}</td>
                <td>{{$pedido["id_cliente"]}}</td>
                <td>{{$pedido["estado"]}}</td>
                <td>{{$pedido["fecha_entrega"]}}</td>
                <td>{{$pedido["precio"]}}</td>
            </tr>
        @endforeach
    </table> 
    <input type="text">    
    <input type="text">
    <select name="" id="">

    </select>
    <input type="text">
    <script src="/js/pedidos.js"></script>
</body>
</html>