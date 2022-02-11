<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de jugadores por equipo')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($listadoJugEquipos as $jug)
                <div class="p-6 bg-white border-b border-gray-200">
                    <span>{{$jug->nombre}}</span>
                    <a href="{{url('borrarJugadores/'.$jug->id)}}">Borrar</a>
                    <a href="{{url('modificarJugadores/'.$jug->id)}}">Modificar</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>