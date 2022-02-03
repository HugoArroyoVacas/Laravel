<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un partido') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="columns-2">
                        <x-label for="equipo1">Equipo de casa</x-label>
                        <select id="equipo1" name="Equipo 1">
                            @foreach ($listaEquipos as $equipo)
                                <option value="{{ $equipo->id}}">{{$equipo->nombre}}</option>
                            @endforeach
                        </select>
                        <x-label for="sg1">Sets</x-label>
                        <x-input type="text" name="sg1" id="sg1"></x-input>
                        <br>
                        <x-label for="equipo1">Equipo de fuera</x-label>
                        <select id="equipo2" name="Equipo 2">
                            @foreach ($listaEquipos as $equipo)
                                <option value="{{ $equipo->id}}">{{$equipo->nombre}}</option>
                            @endforeach
                        </select>
                        <x-label for="sg2">Sets</x-label>
                        <x-input type="text" name="sg2" id="sg2"></x-input>
                        <br>
                        <br>
                        <x-button class="m1-4">{{'Register'}}</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>