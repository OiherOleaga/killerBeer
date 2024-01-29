<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KillerBeer</title>
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>

<body>
    <form action="{{ route("formato.store")}}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="{{ old('tipo') }}" required>
        <input type="submit" value="Crear">
    </form>


    <table>
        <tr>
            <th>
                id
            </th>
            <th>
                tipo
            </th>

        </tr>

        @foreach ($formatos as $formato)
        <tr>
            <td>{{$formato["id"]}}</td>
            <td>{{$formato["tipo"]}}</td>
            <td>
                <form action="{{ route('formato.destroy', $formato['id']) }}" method="POST">
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>

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