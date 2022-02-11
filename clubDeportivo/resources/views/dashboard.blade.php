<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de equipos y jugadores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($listadoEquipos as $eqp)
                <div class="p-6 bg-white border-b border-gray-200">
                     <a href="{{url('listadoEquipos/'.$eqp->id)}}">{{$eqp->nombre}}</a>
                     <a href="{{url('borrarEquipos/'.$eqp->id)}}">Borrar</a>
                     <a href="{{url('modificarEquipos/'.$eqp->id)}}">Modificar</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>