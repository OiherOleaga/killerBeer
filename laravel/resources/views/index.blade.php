@extends('layouts.app')
@section('content')
    <section class="items-center justify-center flex bg-white dark:bg-gray-900 rounded">
        <div class="text-center">
            <h1 class="text-fourth mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl dark:text-white">
                Gestión de KillerBeer</h1>
            <h3 class=" h3 mb-2 text-third lg:text-xl sm:px-16">
                Bienvenid@ a la base de datos oficial de KillerBeer.
            </h3>
            <img width="870px" src="{{ asset('img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png') }}"
                alt="Descripción de la imagen">
        </div>
    </section>
@endsection
