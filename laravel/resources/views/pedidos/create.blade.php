<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KillerBeer</title>
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.header')
    <main class="h-dvh">
        <form action="{{ route('pedidos.store') }}" method="POST" id="formulario">
            @csrf
            <div class="flex items-center justify-center">
                <div class="container max-w-screen-lg mx-auto">
                    <div>
                        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600 lg:border-r-2">
                                    <p class="font-medium text-lg">Datos del pedido</p>
                                    <p>Rellene todos los campos.</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <label for="id_cliente">Cliente</label>
                                            <select id="cliente" name="id_cliente" class="h-10 text-fourth border mt-1 rounded px-4 w-full bg-lightdark">
                                                @foreach($clientes as $cliente)
                                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="estado">Estado</label>
                                            <select id="estado" name="estado" class="h-10 text-fourth border mt-1 rounded px-4 w-full bg-lightdark">
                                                    <option value="solicitado" selected>Solicitado</option>
                                                    <option value="preparacion" >Preparacion</option>
                                                    <option value="entrega" >Entrega</option>
                                                    <option value="entregado">Entregado</option>
                                            </select>
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="fecha_entrega">Fecha de entrega</label>
                                            <input id="fecha" type="date" name="fecha_entrega"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="precio">Precio</label>
                                            <input type="number" name="precio" id="precio"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                placeholder="" readonly/>
                                        </div>

                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                            <div class="md:col-span-5">
                                                <div class="flex items-center space-x-4 pb-6">
                                                    <div class="flex-grow">
                                                        <label for="producto">Productos</label>
                                                        <select id="producto" name="producto" class="h-10 text-fourth border mt-1 rounded px-4 bg-lightdark">
                                                            @foreach($productos as $producto)
                                                                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                        
                                                            <select id="formato" name="formato_id" class="h-10 text-fourth border mt-1 rounded px-4 bg-lightdark">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>

                                                            </select>
                                                        
                                                        

                                                        
                                                    </div>
                                                    <div class="md:col-span-5"> 
                                                        <label for="id_unidades">Unidades</label>
                                                        <input id="unidades" type="number" min="1" class="h-8 w-24 text-fourth border mt-1 rounded px-3 bg-lightdark">
                                                    </div>
                                                    <button type="button" id="agregarBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-12 rounded mt-6">Agregar</button>
                                                </div>
                                                
                                                
                                                
                                                <table id="pedidoTable" class=" text-sm rtl:text-right  text-second dark:text-gray-400 text-center">
                                                    <thead class="text-xs text-fourth uppercase bg-lightdark dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Producto
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Formato
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Unidades
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Precio
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Acciones
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                

                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                            
                                        <div class="md:col-span-5">
                                            <div class="inline-flex items-center">
                                                <input type="checkbox" name="billing_same" id="billing_same"
                                                    class="form-checkbox" required />
                                                <label for="billing_same" class="ml-2">Acepto los <span class="text-blue-700">terminos y condiciones.</span></label>
                                            </div>
                                        </div>

                                        <div class="md:col-span-5 text-right">
                                            <div class="inline-flex items-end gap-2">
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="insert">Insertar</button>
                                                <a href="/pedidos"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                    Cancelar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    @include('partials.footer')

    <script src="/js/tabla_insert_pedidos.js"></script>
</body>
</html>

