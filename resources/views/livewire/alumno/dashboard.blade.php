<div>
    @if ($status == 'nada')
        <h1>Inscribete a un curso</h1>
    @endif
    @if ($status == 'inscrito')
        <h1>Ya estas inscrito en el curso {{$cursos->sortByDesc('created_at')->first()->nombre}}</h1>
        @livewire('ShowHorario')
    @endif
</div>
