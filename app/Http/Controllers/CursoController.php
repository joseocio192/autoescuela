<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Curso;
use App\Models\User;
use App\Models\Alumno;
use App\Models\Maestro;
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
            $cursoxalumno = CursoxAlumno::where('curso_id', $curso)
                ->where('alumno_id', $alumno->id)
                ->whereNotIn('estado', ['terminado', 'cancelado'])
                ->first();
        }
        return view('curso', compact('cursoxalumno', 'cursos'));
    }

    public function inscripcion(Request $request)
    {
        $curso = Curso::find($request->id);
        $user = Auth::user();
        $fecha = date('Y-m-d H:i:s');
        $alumno = Alumno::where('user_id', $user->id)->first();
        $cursoxalumno = new CursoxAlumno();
        $cursoxalumno->curso_id = $curso->id;
        $cursoxalumno->alumno_id = $alumno->id;
        $cursoxalumno->maestro_id = 1;
        $cursoxalumno->horario = $request->hora_inicio . '-' .$request->hora_fin;
        //validate if the maestro is already enrolled in other courses that overlap in time
        $maestros = Maestro::all();
        $maestroDisponible = false;
        foreach ($maestros as $m) {
            $cursos = CursoxAlumno::where('maestro_id', $m->id)->whereNotIn('estado', ['terminado', 'cancelado'])
                ->get();
            $disponible = true;
            foreach ($cursos as $c) {
            $horario = explode('-', $c->horario);
            $cursoHorario = explode('-', $cursoxalumno->horario);
            if (count($horario) == 2 && count($cursoHorario) == 2) {
                list($start, $end) = $horario;
                list($newStart, $newEnd) = $cursoHorario;
                if (($newStart < $end) && ($newEnd > $start)) {
                $disponible = false;
                break;
                }
            }
            }
            if ($disponible) {
            $cursoxalumno->maestro_id = $m->id;
            $maestroDisponible = true;
            break;
            }
        }
        if (!$maestroDisponible) {
            return redirect()->route('curso.show', $curso->id)->with('error', 'No hay maestros disponibles para esta hora');
        }
        //validate if the user is already enrolled in other courses that overlap in time
        $cursos = CursoxAlumno::where('alumno_id', $alumno->id)->whereNotIn('estado', ['terminado', 'cancelado'])
        ->get();
        foreach ($cursos as $c) {
            $horario = explode('-', $c->horario);
            $cursoHorario = explode('-', $cursoxalumno->horario);
            if (count($horario) == 2 && count($cursoHorario) == 2) {
                list($start, $end) = $horario;
                list($newStart, $newEnd) = $cursoHorario;
                if (($newStart < $end) && ($newEnd > $start)) {
                    return redirect()->route('curso.show', $curso->id)->with('error', 'Ya estas inscrito en otro curso a la misma hora');
                }
            }
        }
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
        $maestroid = $user->maestro->id;
        $curso = DB::select("
        SELECT *
        FROM cursox_alumnos ca
        WHERE maestro_id = ?
        AND ? BETWEEN SUBSTRING_INDEX(horario, '-', 1) AND SUBSTRING_INDEX(horario, '-', -1)
        order by horario desc
        limit 1
    ",[$maestroid,$hora]);
        $alumnoid = $curso[0]->alumno_id;
        $curso = Curso::find($curso[0]->curso_id);
        $alumno = Alumno::find($alumnoid);
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
