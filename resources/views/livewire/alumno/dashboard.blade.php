
<div>
    @if ($status == 'nada')
        <a href="/curso/1">
            <button>Ver Cursos</button>

    @endif
    @if ($status == 'inscrito')
        <h1>Ya estas inscrito en el curso {{$cursos->sortByDesc('created_at')->first()->nombre}}</h1>
        @livewire('ShowHorario')
    @endif
    @if ($status == 'verclase')
        @livewire('verclase')
    @endif
    <style>
        .card {
            margin: 10px;
        }
        p, h2{
            color: white;
        }
        h2
    </style>
</div>
