@extends('layouts.app')
@section('content')
    <section class="items-center mt-5 flex-col flex bg-white dark:bg-gray-900 rounded">
        <div class="text-center">
            <h1
                class="text-gray-900 mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-7xl dark:text-white">
                Gestión de KillerBeer</h1>

            <h3 class=" h3 mb-2 text-gray-900 dark:text-white lg:text-xl sm:px-16">
                Bienvenid@ a la gran base de datos oficial de KillerBeer.
            </h3>
        </div>
        <img width="130px"
            src="{{ asset('img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png') }}"
            alt="Descripción de la imagen">
        <div class="container mx-auto px-5 py-2 lg:px-32">
            <div class="-m-1 flex flex-wrap md:-m-2">
                <div class="flex w-1/2 flex-wrap">
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="http://localhost:8000/fotosProducto/KillerCásica.jpg" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="http://localhost:8000/fotosProducto/KillerTostada.jpg" />
                    </div>
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="http://localhost:8000/fotosProducto/Killer_Tostada_0_0.jpg" />
                    </div>
                </div>
                <div class="flex w-1/2 flex-wrap">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="http://localhost:8000/fotosProducto/KillerMagna.jpg" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="http://localhost:8000/fotosProducto/aguabasicKillerBeer.jpg" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="http://localhost:8000/fotosProducto/KillerPremium.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
