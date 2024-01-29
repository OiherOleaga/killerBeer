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
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="flex items-center justify-center">
                <div class="container max-w-screen-lg mx-auto">
                    <div>
                        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600 lg:border-r-2">
                                    <p class="font-medium text-lg">Datos del cliente</p>
                                    <p>Rellene todos los campos.</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" name="nombre"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="correo">Email</label>
                                            <input type="text" name="correo"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="email@domain.com" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="direccion">Direccion</label>
                                            <input type="text" name="direccion"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="telefono">Telefono</label>
                                            <input type="text" name="telefono"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="codigo">Codigo</label>
                                            <input type="text" name="codigo"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="" />
                                        </div>

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
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar</button>
                                                <a href="/clientes"
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
</body>

</html>