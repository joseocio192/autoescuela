<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Curso;
use App\Models\User;
use App\Models\Alumno;
use App\Models\CursoxAlumno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class CursoController extends Controller
{
    public function show($curso)
    {
        $cursos = Curso::find($curso);
        //Log del curso

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

    public function verclase(Request $request)
    {
        $user = Auth::user();
        $hora = $request->hora;
        $dia = $request->dia;
        $curso = DB::select("
        SELECT *
        FROM cursox_alumnos ca
        WHERE maestro_id = 1
        AND ? BETWEEN SUBSTRING_INDEX(horario, '-', 1) AND SUBSTRING_INDEX(horario, '-', -1)
        order by horario desc
        limit 1
    ", [$hora]);
        Log::info($curso);
        $curso = Curso::find($curso[0]->curso_id);
        $alumnoid = $curso->alumnos->first()->id;
        Log::info($alumnoid);
        $alumno = Alumno::find($alumnoid);

        Log::info('valiendo verga' . $alumno);
        switch ($dia) {
            case '0':
                $dia = 'Lunes';
                break;
            case '1':
                $dia = 'Martes';
                break;
            case '2':
                $dia = 'Miercoles';
                break;
            case '3':
                $dia = 'Jueves';
                break;
            case '4':
                $dia = 'Viernes';
                break;
            case '5':
                $dia = 'Sabado';
                break;
            case '6':
                $dia = 'Domingo';
                break;
            default:
                $dia = 'Dia no valido';
                break;
        }
        return view('clase', compact('curso', 'alumno', 'hora', 'dia', 'user','alumno'));
    }
}
