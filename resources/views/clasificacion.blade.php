<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clasificacion') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="columns-2">
                        <table class="max-w-7x1 whitespace-nowrap">
                        <thead class="bg-gray-100">
                            <tr class="text-center font-bold">
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Equipo</th>
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Puntos</th>
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Sets ganados</th>
                                <th class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">Sets perdidos</th>
                            </tr>
                        </thead>
                        @foreach ($listaEquipos as $equipo)
                        <tbody class="bg-white">
                            <tr class="text-center">
                        	   <td class="px-6 py-4 whitespace-nowrap">{{$equipo->nombre}}</td>
                        	   <td class="px-6 py-4 whitespace-nowrap">{{$equipo->puntos}}</td>
                        	   <td class="px-6 py-4 whitespace-nowrap">{{$equipo->sg}}</td>
                        	   <td class="px-6 py-4 whitespace-nowrap">{{$equipo->sp}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>