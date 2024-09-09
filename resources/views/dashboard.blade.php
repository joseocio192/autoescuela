<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        type="text/css">
        .Horario {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #f9f9f9;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="Horario">
                <!-- Horario en una tabla donde las horas estan verticalmente y los dias horizontales -->
                    @livewire('show-horario')
            </div>
        </div>
    </div>
</x-app-layout>
