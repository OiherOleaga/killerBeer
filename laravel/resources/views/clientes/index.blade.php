    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KillerBeer</title>
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('partials.header')
        <section class="text-fourth">
            <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Tabla de Clientes</h1>
            </div>
        </section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-2 mx-12">
            <table class="w-full text-sm rtl:text-right text-gray-500 dark:text-gray-400 text-center">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Direccion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Teléfono
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Codigo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">{{ $cliente->id }}</td>
                            <td class="px-6 py-4">{{ $cliente->nombre }}</td>
                            <td class="px-6 py-4">{{ $cliente->direccion }}</td>
                            <td class="px-6 py-4">{{ $cliente->telefono }}</td>
                            <td class="px-6 py-4">{{ $cliente->correo }}</td>
                            <td class="px-6 py-4">{{ $cliente->codigo }}</td>
                            <td class="flex items-center justify-center gap-2 m-2">
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-5 py-2.5 font-medium bg-red-50 hover:bg-red-100 hover:text-red-600 text-red-500 rounded-lg text-sm">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" w-full flex items-center justify-center mb-4">
            <a href="{{ route('clientes.create') }}" class="relative inline-block text-lg group">
                <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-blue-800 transition-colors duration-300 ease-out border-2 border-blue-800 rounded-lg group-hover:text-white">
                    <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                    <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-blue-900 group-hover:-rotate-180 ease"></span>
                    <span class="relative">+ Añadir Cliente</span>
                </span>
                <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-blue-900 rounded-lg group-hover:mb-0 group-hover:mr-0"
                    data-rounded="rounded-lg"></span>
            </a>
        </div>
    </body>
    </html>