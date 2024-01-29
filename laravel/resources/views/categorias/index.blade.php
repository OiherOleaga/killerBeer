<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action={{route("categorias.store")}} method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Agregar">
    </form>

    <ul>
        @foreach ($categorias as $categoria)
            <li>
                <form action={{route("categorias.update", $categoria["id"])}} method="POST">
                    @csrf
                    <input type="text" value={{$categoria["nombre"]}} name="nombre">
                    <input type="submit" value="Cambiar">
                </form>
                <form action={{route("categorias.destroy", $categoria["id"])}} method="post">
                    @csrf
                    <input type="submit"value="Borrar">
                </form>
            </li>
        @endforeach
    </ul>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>