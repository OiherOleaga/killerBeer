@extends('layouts.app')
@section('content')
    {{-- <form action={{route("productos.store")}} method="post" enctype="multipart/form-data">
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

        <input type="file" accept="image/*" class="fotoInput">
        <canvas class="insertCanvas" style="border: 1px solid black"></canvas>
        <input type="hidden" id="foto" class="foto">

        <input type="submit" value="Crear">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    </form> --}}
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="/"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="/productos"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Productos</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Lista</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Todas los productos
                </h1>
            </div>
        </div>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-2 p-2 text-center">
        <table class="w-full text-sm rtl:text-right text-gray-500 dark:text-gray-400 text-center">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre

                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        id_categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <form action={{route("productos.update", $producto["id"])}} method="POST">
                    @csrf
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $producto->id }}
                        </td>
                        <td class="px-6 py-4 flex items-center flex-col gap-2 font-semibold w-100 text-gray-900 dark:text-white">
                            <canvas class="insertCanvas" src={{ $producto['foto'] }} style="width:200px; heigth:300px;"></canvas>
                            <input type="file" class="fotoInput">

                            <input type="hidden" class="foto" id="foto" name="foto">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-gray-900">
                            <input type="text" value={{ $producto['nombre'] }} name="nombre">
                        </td>

                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-gray-900">
                            <textarea name="descripcion">{{ $producto['descripcion'] }} </textarea>
                        </td>

                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-gray-900">
                            <select name="id_categoria" > 
                                @foreach ($categorias as $categoria)
                                    <option value={{$categoria["id"]}} {{$categoria["id"] == $producto["id_categoria"]? "selected" : "" }}>{{ $categoria["nombre"] }}</option> 
                                @endforeach
                            </select>
                        </td>

                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script type="module" src="/js/productos.js" defer></script>
@endsection
