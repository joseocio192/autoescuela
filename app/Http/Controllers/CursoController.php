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
        $cursoxalumno = null;
       //check if the user is logged in
        if (Auth::check()) {
            $user = Auth::user();
            $alumno = Alumno::where('user_id', $user->id)->first();
            $cursoxalumno = CursoxAlumno::where('curso_id', $curso)->where('alumno_id', $alumno->id)->first();
        }
        return view('curso', compact('cursoxalumno', 'cursos'));
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
