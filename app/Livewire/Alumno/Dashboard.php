<?php

namespace App\Livewire\Alumno;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Dashboard extends Component
{
    public function render()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $alumno = $user->alumno;
        try {
            $cursos = $alumno->cursos;
        } catch (\Exception $e) {
            $cursos = collect();
        }
        $status = "nada";

        if ($alumno) {
            $cursos = $alumno->cursos;
            if ($cursos->count() > 0) {
                $status = "inscrito";
            }
        }
        $todosLosCursos = \App\Models\Curso::all();
        return view('livewire.alumno.dashboard', compact('cursos', 'status', 'todosLosCursos'));

    }
}
