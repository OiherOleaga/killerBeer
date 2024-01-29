<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KillerBeer</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.header')
    <main>
        <section class="text-fourth items-center justify-center flex">
            <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Gestión de KillerBeer</h1>
                <p class="mb-2 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                    Bienvenid@ a la base de datos oficial de KillerBeer.
                </p>
                <img src="{{ asset('img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png') }}" alt="Descripción de la imagen">
            </div>
        </section>
    </main>
    @include('partials.footer')
</body>

</html>
