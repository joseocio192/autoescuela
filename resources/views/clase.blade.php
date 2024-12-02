</body>
</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>

        h1,p {
            color: white;
        }
        a {
            color: violet;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="Horario">
                <h1>Clase de {{$curso->nombre}}</h1>
                <p>Esta es la clase de {{ $alumno->user->name }} favor de recogerlo a esa hora</p>
                <p>La clase seleccionada es a las {{ $hora }} del día {{ $dia }}</p>
                <a href="/dashboard">Volver al horario</a>
            </div>
        </div>
    </div>
</x-app-layout>
