<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un equipo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('guardarEquipo') }}" method="get">
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre del equipo:</label>
                        <input type="text" name="nombre" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>
                        <br>
                        <label for="puntos" class="block text-gray-700 text-sm font-bold mb-2">Puntos:</label>
                        <input type="text" name="puntos" id="puntos" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>
                        <br>
                        <label for="sg" class="block text-gray-700 text-sm font-bold mb-2">Sets ganados:</label>
                        <input type="text" name="sg" id="sg" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>
                        <br>
                        <label for="sp" class="block text-gray-700 text-sm font-bold mb-2">Sets perdidos:</label>
                        <input type="text" name="sp" id="sp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <br>
                        <br>
                        <input type="submit" value="Guardar Equipo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>