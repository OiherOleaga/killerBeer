@extends('layouts.app')
@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
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
            <div class="sm:flex">
                <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form action="{{ route('productos.index') }}" method="GET" class="filter-form">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" name="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Buscar productos">
                        </div>
                    </form>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <a href="{{ route('productos.create') }}">
                        <button type="button" data-modal-toggle="add-user-modal"
                            class="bg-blue-700 inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Añadir Producto
                        </button>
                    </a>
                </div>
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
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Formatos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Accion
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <form action={{ route('productos.update', $producto['id']) }} method="POST">
                        @csrf
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $producto->id }}
                            </td>
                            <td
                                class="px-6 py-4 flex items-center flex-col gap-2 font-semibold w-100 text-gray-900 dark:text-white">
                                <canvas class="insertCanvas" src={{ $producto['foto'] }}
                                    style="width:150px; border-radius:10px; object-fit:contain;"></canvas>
                                <input type="file" class="fotoInput">
                                <input type="hidden" class="foto" id="foto" name="foto">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-gray-900">
                                <input type="text" value="{{ $producto['nombre'] }}" name="nombre">
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-gray-900">
                                <textarea name="descripcion">{{ $producto['descripcion'] }} </textarea>
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-gray-900">
                                <select name="id_categoria">
                                    @foreach ($categorias as $categoria)
                                        <option value={{ $categoria['id'] }}
                                            {{ $categoria['id'] == $producto['id_categoria'] ? 'selected' : '' }}>
                                            {{ $categoria['nombre'] }}</option>
                                    @endforeach
                                </select>
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white dark:text-gray-900">
                                @foreach($formatos as $formato)
                                    <?php $checked = false; ?>
                                    <?php $precio = ""?>
                                    @foreach ($producto->formatos as $prod_formato)
                                        @if ($formato->tipo == $prod_formato->tipo)
                                            @foreach ($formatosProductos as $formatoProducto)
                                                @if ($formatoProducto->id_formatos == $prod_formato->id && $formatoProducto->id_productos == $producto->id)
                                                    <?php $precio = $formatoProducto->precio; ?>
                                                @endif
                                            @endforeach
                                            <?php $checked = true; ?>
                                            @break
                                        @endif
                                    @endforeach
                                    
                                    <input type="number" min="0.01" step="0.01" value="{{$precio}}" name="precios[]" style="color: black" />
                                    <input id="{{ $formato->tipo }}" type="checkbox" name="formatos[]" value="{{ $formato->id }}" {{ $checked ? 'checked' : '' }}>
                                    <label class="p-2" for="{{ $formato->tipo }}">{{ $formato->tipo }}</label> 
                                    @if ($checked) 
                                        <input type="hidden" name="borrarFormato[]" value="-1">
                                    @endif 
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                <button type="submit" value="Cambiar"
                                    class="px-5 py-2.5 hover:bg-blue-500 hover:text-blue-900 text-blue-500 rounded-lg text-sm font-semibold">
                                    Cambiar
                                </button>
                    </form>
                    <form action={{ route('productos.destroy', $producto['id']) }} method="POST">
                        @csrf
                        <button type="submit" value="Borrar"
                            class="px-5 py-2.5 hover:bg-red-500 hover:text-red-900 text-red-500 rounded-lg text-sm font-semibold">
                            Borrar
                        </button>
                    </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-2">
            {{ $productos->appends(['search' => $search])->links() }}
        </div>
    </div>

    <script type="module" src="/js/productos.js" defer></script>
@endsection
