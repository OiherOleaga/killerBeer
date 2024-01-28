<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KillerBeer</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <nav>
            <ul>
                <li><a href={{ route("pedidos.index") }}>pedidos</a></li>
                <li><a href={{ route("productos.index") }}>productos</a></li>
            </ul>
        </nav>
        <h1>index</h1>
    </body>
</html>