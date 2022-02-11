<x-app-layout>
    @isset($jugador)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Crear un jugador') }}
        </h2>
     </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post">
                        @csrf
                        <x-label for="nombre">Nombre del jugador:</x-label>
                        <x-input type="text" name="nombre" id="nombre"></x-input>
                        <br>
                        <br>
                        <x-label for="edad">Edad del jugador:</x-label>
                        <x-input type="text" name="edad" id="edad"></x-input>
                        <br>
                        <br>
                        <x-label for="equipo_id">Equipo del jugador:</x-label>
                        <select name="equipo_id">
                            @foreach ($jugadores as $equip)
                            <option value="{{$equip->equipo_id}}">{{$equip->nombre}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <x-button class="ml-4">
                            {{ __('Crear Jugador') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Modificar un jugador') }}
        </h2>
     </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post">
                        @csrf
                        <x-label for="nombre">Nombre del jugador:</x-label>
                        <x-input type="text" name="nombre" id="nombre"></x-input>
                        <br>
                        <br>
                        <x-label for="edad">Edad del jugador:</x-label>
                        <x-input type="text" name="edad" id="edad"></x-input>
                        <br>
                        <br>
                        <x-label for="equipo_id">Equipo del jugador:</x-label>
                        <select name="equipo_id">
                            @foreach ($jugadores as $equip)
                            <option value="{{$equip->equipo_id}}">{{$equip->nombre}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <x-button class="ml-4">
                            {{ __('Modificar Jugador') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endisset
</x-app-layout>