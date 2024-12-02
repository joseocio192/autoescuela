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
                @if ($cursoxalumno == null)
                    <form action="/pago" method="post" style="color: white" onsubmit="return validateTime()">
                        @csrf
                        <input type="hidden" name="id" value="{{$cursos->id}}">
                        <label for="hora_inicio">Selecciona la hora de inicio:</label>
                        <select name="hora_inicio" id="hora_inicio" required>
                            <option value="08:00">8:00</option>
                            <option value="09:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                        </select>

                        <label for="hora_fin">Selecciona la hora de fin:</label>
                        <select name="hora_fin" id="hora_fin" required>
                            <option value="09:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                        </select>
                        <button type="submit" class="split_reg">Inscribirme</button>
                    </form>
                @else
                    <p>Ya estas inscrito en este curso</p>
                @endif
            @endif
        @else
       <p> <a href="{{ route('register') }}" class="split_reg">Registrate</a></p>
        @endif
<script>
    function validateTime() {
        var horaInicio = document.getElementById('hora_inicio').value;
        var horaFin = document.getElementById('hora_fin').value;
        if (horaFin <= horaInicio) {
            alert('La hora de fin debe ser mayor que la hora de inicio.');
            return false;
        }
        return true;
    }

    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
</body>
</html>
