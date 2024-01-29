<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action={{route("productos.store")}} method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"> 

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>

        <label for="categoria">Categoria</label>
        <select name="id_categoria" id="categoria"> 
            @foreach ($categorias as $categoria)
                <option value={{$categoria["id"]}}>{{ $categoria["nombre"] }}</option> 
            @endforeach
        </select>

        <input type="file" accept="image/*" id="fotoInput">
        <canvas id="insertCanvas" style="border: 1px solid black"></canvas>
        <input type="hidden" id="foto" name="foto">

        <input type="submit" value="Crear">
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <table>
        <tr>
            <th>
                id
            </th>
            <th>
                nombre
            </th>
            <th>
                descripcion
            </th>
            <th>
                id_categoria
            </th>
            <th>
                foto
            </th>
        </tr>

        @foreach ($productos as $producto)
            <tr>
                <form action={{route("productos.update", $producto["id"])}} method="POST">
                    @csrf
                    <td><input type="text" value={{$producto["id"]}} ></td>
                    <td><input type="text" value={{$producto["nombre"]}} ></td>
                    <td><textarea>value={{$producto["descripcion"]}} </textarea></td>
                    <td>{{$producto["id_categoria"]}}</td>
                    <td><img src={{$producto["foto"]}} /></td>
                    <td><input type="submit" value="Guardar"></td>
                </form>
                <td>
                    <form action={{route("productos.destroy", $producto["id"])}} method="POST">
                        @csrf
                        <input type="submit" value="Borra">
                    </form>
                </td>
            </tr>
        @endforeach
    </table> 
    <script type="module" src="/js/productos.js"></script>
</body>
</html>