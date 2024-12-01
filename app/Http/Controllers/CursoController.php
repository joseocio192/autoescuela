<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Curso;
use App\Models\User;
use App\Models\Alumno;
use App\Models\CursoxAlumno;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    public function show($curso)
    {
        $cursos = Curso::find($curso);
        //Log del curso
        Log::info($cursos);
        return view('curso', compact('cursos'));
    }

    public function inscripcion($id)
    {
        $curso = Curso::find($id);
        $user = Auth::user();
        $fecha = date('Y-m-d H:i:s');
        $alumno = Alumno::where('user_id', $user->id)->first();
        $cursoxalumno = new CursoxAlumno();
        $cursoxalumno->curso_id = $curso->id;
        $cursoxalumno->alumno_id = $alumno->id;
        $cursoxalumno->maestro_id = 1;
        $cursoxalumno->horario = '10:00-12:00';
        $cursoxalumno->fecha_inscripcion = $fecha;
        $cursoxalumno->horas_cursadas = 0;
        $cursoxalumno->estado = 'inscrito';
        $cursoxalumno->save();
        return view('pago', compact('curso', 'user', 'fecha'));
    }
}
