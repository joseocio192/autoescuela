
<div>
    @if ($status == 'nada')
        <a href="/curso/1">
            <button>Ver Cursos</button>

    @endif
    @if ($status == 'inscrito')
        <h1>Ya estas inscrito en el curso {{$cursos->sortByDesc('created_at')->first()->nombre}}</h1>
        @livewire('ShowHorario')
    @endif
    <style>
        .card {
            margin: 10px;
        }

        button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
        p, h2{
            color: white;
        }
        h2
    </style>
</div>
