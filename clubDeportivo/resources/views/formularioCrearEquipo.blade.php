<x-app-layout>
        @isset($equipo)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Modificar un equipo') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="post">
                            @csrf
                            <x-label for="nombre">Nombre del equipo:</x-label>
                            <x-input type="text" name="nombre" id="nombre" value="{{$equipo->nombre}}"></x-input>
                            <br>
                            <br>
                            <x-label for="entrenador">Entrenador del equipo:</x-label>
                            <x-input type="text" name="entrenador" id="entrenador" value="{{$equipo->entrenador}}"></x-input>
                            <br>
                            <br>
                            <x-label for="categoria">Categoría del equipo:</x-label>
                            <x-input type="text" name="categoria" id="categoria" value="{{$equipo->categoria}}"></x-input>
                            <br>
                            <br>
                            <x-button class="ml-4">
                                {{ __('Modificar Equipo') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear un equipo') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="post">
                            @csrf
                            <x-label for="nombre">Nombre del equipo:</x-label>
                            <x-input type="text" name="nombre" id="nombre"></x-input>
                            <br>
                            <br>
                            <x-label for="entrenador">Entrenador del equipo:</x-label>
                            <x-input type="text" name="entrenador" id="entrenador"></x-input>
                            <br>
                            <br>
                            <x-label for="categoria">Categoría del equipo:</x-label>
                            <x-input type="text" name="categoria" id="categoria"></x-input>
                            <br>
                            <br>
                            <x-button class="ml-4">
                                {{ __('Crear Equipo') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endisset
</x-app-layout>