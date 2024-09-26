<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ShowHorario extends Component
{
    public function render()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $timeSlots = [];
        $cursoNombre = '';

        if ($user->rol == 'alumno') {
            $alumno = $user->alumno;
            $cursos = $alumno->cursos;
            $timeSlots = $cursos->pluck('pivot.horario')->toArray();
            $cursoNombre = $cursos->sortByDesc('pivot.horario')->first()->nombre;
        }

        if ($user->rol == 'maestro') {
            $maestro = $user->maestro;
            $cursos = $maestro->cursos;
            $timeSlots = $cursos->pluck('pivot.horario')->toArray();
            $cursoNombre = $cursos->sortByDesc('pivot.horario')->first()->nombre;
            Log::info($maestro);
            Log::info($cursos);
            Log::info($timeSlots);
        }

        return view('livewire.show-horario', compact('timeSlots', 'cursoNombre'));
    }
}
