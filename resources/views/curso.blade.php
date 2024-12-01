<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoescuela</title>
</head>

<body style="background-color: rgb(17 24 39);">
    <livewire:navbar.navbar>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Cursos</h1>
            </div>
        </div>
        <h1>Descripcion</h1>
        <p>{{$cursos->descripcion}}</p>
        <p>El curso tiene un costo de {{$cursos->costo}}$ y consiste en {{$cursos->horas}} horas de clases</p>
        @if (Auth::user())
            @if (Auth::user()->rol == 'alumno')
                <a href="{{ route('inscripcion', ['id' => $cursos->id]) }}" class="split_reg">Inscribirme</a>
            @endif
        @else
       <p> <a href="{{ route('register') }}" class="split_reg">Registrate</a></p>
        @endif
</body>
</html>
