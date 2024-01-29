    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KillerBeer</title>
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    </head>

    <body>
        <form action="{{ route("clientes.store")}}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>

            <label for="dir">Dirección:</label>
            <input type="text" id="dir" name="direccion" value="{{ old('direccion') }}" required>

            <label for="tel">Teléfono (9 números):</label>
            <input type="text" id="tel" name="telefono" pattern="[0-9]{9}" title="Debe ser una cadena de 9 números" required value="{{ old('telefono') }}">

            <label for="name">Nombre:</label>
            <input type="text" id="name" name="nombre" value="{{ old('nombre') }}" required>

            <label for="cod">Código (9 números):</label>
            <input type="text" id="cod" name="codigo" pattern="[0-9]{9}" title="Debe ser una cadena de 9 números" value="{{ old('codigo') }}"required>

            <input type="submit" value="Crear">
        </form>


        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    correo
                </th>
                <th>
                    direccion
                </th>
                <th>
                    telefono
                </th>
                <th>
                    nombre
                </th>
                <th>
                    codigo
                </th>
            </tr>

            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente["id"]}}</td>
                <td>{{$cliente["correo"]}}</td>
                <td>{{$cliente["direccion"]}}</td>
                <td>{{$cliente["telefono"]}}</td>
                <td>{{$cliente["nombre"]}}</td>
                <td>{{$cliente["codigo"]}}</td>
            </tr>
            @endforeach
        </table>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <script src="/js/pedidos.js"></script>
    </body>

    </html>