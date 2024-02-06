@extends('layouts.app')
@section('content')
    <form action={{ route('pedidos.store') }} method="POST" id="formulario">
        @csrf
        <div class="flex items-center justify-center h-screen mx-2">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 dark:bg-gray-800 dark:text-white">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600 lg:border-r-2">
                                <p class="font-medium text-lg">Datos del pedido</p>
                                <p>Rellene todos los campos.</p>
                            </div>
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
                                    <div class="md:col-span-5">
                                        <label for="id_cliente">Cliente</label>
                                        <select id="cliente" name="id_cliente"
                                            class="h-10 text-gray-900 border mt-1 rounded px-4 w-full dark:text-gray-900">
                                            @foreach ($clientes as $cliente)
                                                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="estado">Estado</label>
                                        <select id="estado" name="estado"
                                            class="h-10  border mt-1 rounded px-4 w-full dark:text-gray-900">
                                            <option value="solicitado" selected>Solicitado</option>
                                            <option value="preparacion">Preparacion</option>
                                            <option value="entrega">Entrega</option>
                                            <option value="entregado">Entregado</option>
                                        </select>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="fecha_entrega">Fecha de entrega</label>
                                        <input id="fecha" type="date" name="fecha_entrega"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 text-gray-900"
                                            value="" placeholder="" />
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="precio">Precio</label>
                                        <input type="number" name="precio" id="precio"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 text-gray-900"
                                            placeholder="" readonly>
                                    </div>

                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <div class="flex items-center space-x-4 pb-6">
                                                <div class="flex-grow">
                                                    <select id="producto" name="producto"
                                                        class="h-10 dark:border mt-1 rounded px-4 text-gray-900">
                                                        @foreach ($productos as $producto)
                                                            <option value="{{ $producto->id }}">{{ $producto->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <select id="formato"
                                                        class="h-10 w-20 border mt-1 rounded px-4 text-gray-900">

                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>

                                                    </select>

                                                    <input id="unidades" type="number" min="1"
                                                        placeholder="Unidades"
                                                        class="h-8 w-25 text-gray-900 border mt-1 rounded px-3" />
                                                    <button type="button" id="agregarBtn"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-12 rounded mt-6">Agregar</button>
                                                </div>

                                            </div>
                                            <table
                                                class=" text-sm rtl:text-right mb-2 text-gray-900 dark:text-gray-400 text-center">
                                                <thead class="text-xs uppercase dark:bg-gray-700 dark:text-white">
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
                                                <tbody id="pedidoTable">

                                                </tbody>
                                            </table>


                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                                <div class="md:col-span-5">
                                                    <div class="inline-flex items-center">
                                                        <input type="checkbox" name="billing_same" id="billing_same"
                                                            class="form-checkbox" required />
                                                        <label for="billing_same" class="ml-2">Acepto los <span
                                                                class="text-blue-700">terminos y condiciones.</span></label>
                                                    </div>
                                                </div>

                                                <div class="md:col-span-5 text-right">
                                                    <div class="inline-flex items-end gap-2">
                                                        <button type="submit"
                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                            id="insert">Insertar</button>
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
                </div>
            </div>
        </div>
    </form>
    <script type="module" src="/js/tabla_insert_pedidos.js" defer></script>
@endsection
