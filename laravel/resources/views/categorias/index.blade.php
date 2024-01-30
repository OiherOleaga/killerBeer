<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KillerBeer</title>
    <link rel="icon"
        href="{{ asset('img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png') }}">
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-lightdark">
    @include('partials.header')
    <section class="breadcrumb">
        <nav class="flex px-5 py-3 text-fourth dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-lg font-medium text-fourth hover:text-third dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Inicio
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-fourth" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-md font-medium text-fourth md:ms-2 dark:text-gray-400">Categorias</span>
                    </div>
                </li>
            </ol>
        </nav>
    </section>
    <section>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-fourth md:text-5xl lg:text-6xl dark:text-white">
                Tabla de Categorias</h1>
        </div>
    </section>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-2 mx-12 border-2 border-third">
        <table class="w-full text-sm rtl:text-right  text-second dark:text-gray-400 text-center">
            <thead class="text-xs text-fourth uppercase bg-lightdark dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr class=" bg-lightdark">
                        <td class="px-6 py-4">{{ $categoria->id }}</td>
                        <form action={{ route('categorias.update', $categoria['id']) }} method="POST">
                            <td class="px-6 py-4"><input type="text" class="bg-lightdark border-0 text-center"
                                    value="{{ $categoria['nombre'] }}" name="nombre">
                            </td>
                            <td class="flex items-center justify-center gap-2 m-2">
                                @csrf
                                <button type="submit" value="Cambiar"
                                    class="px-5 py-2.5 hover:bg-blue-500 hover:text-blue-900 text-blue-500 rounded-lg text-sm font-semibold">
                                    Cambiar
                                </button>
                        </form>
                        <form action={{ route('categorias.destroy', $categoria['id']) }} method="POST">
                            @csrf
                            <button type="submit" value="Borrar"
                                class="px-5 py-2.5 hover:bg-red-500 hover:text-red-900 text-red-500 rounded-lg text-sm font-semibold">
                                Borrar
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger text-red-700">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
