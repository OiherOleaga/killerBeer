@extends('layouts.app')
@section('content')

    <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="flex items-center justify-center h-screen">
            <div class="container max-w-screen-lg" style="width: 900px">
                <div>
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 dark:bg-gray-800 dark:text-white">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 dark:text-gray-900">
                            <div class="text-gray-600 lg:border-r-2">
                                <p class="font-medium text-lg">Datos del formato</p>
                                <p>Rellene todos los campos.</p>
                            </div>
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 dark:text-white">
                                    <div class="md:col-span-5">
                                        <label for="tipo">nombre</label>
                                        <input type="text" name="nombre"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:text-gray-900"
                                            value="" required />
                                    </div>

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
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar</button>
                                            <a href="/formatos"
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <script src="/js/pedidos.js"></script>
    </form>
@endsection
