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
        $rol = $user->rol;

        if ($user->rol == 'alumno') {
            $alumno = $user->alumno;
            $cursos = $alumno->cursos;
            $timeSlots = $cursos->pluck('pivot.horario')->toArray();
            $cursoNombre = $cursos->sortByDesc('pivot.horario')->first()->nombre;
            return view('livewire.show-horario', compact('timeSlots', 'cursoNombre','rol'));
        }

        if ($user->rol == 'maestro') {
            $maestro = $user->maestro;
            $cursos = $maestro->cursos;
            $timeSlots = $cursos->pluck('pivot.horario')->toArray();
            $cursoNombre = $cursos->sortByDesc('pivot.horario')->first()->nombre;
            return view('livewire.show-horario', compact('timeSlots', 'cursoNombre','rol'));
        }
    }
}
