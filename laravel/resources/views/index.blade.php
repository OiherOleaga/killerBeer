<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KillerBeer</title>
    <link rel="icon"
        href="{{ asset('img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-lightdark">
    @include('partials.header')
    <main>
        <section class="items-center justify-center flex">
            <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
                <h1
                    class="text-fourth mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl dark:text-white">
                    Gestión de KillerBeer</h1>
                <h3 class=" h3 mb-2 text-third lg:text-xl sm:px-16">
                    Bienvenid@ a la base de datos oficial de KillerBeer.
                </h3>
                <img src="{{ asset('img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png') }}"
                    alt="Descripción de la imagen">
            </div>
        </section>
        <section>      
        </section>
    </main>
    @include('partials.footer')
</body>

</html>
