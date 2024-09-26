<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Curso;

class CursoController extends Controller
{
    public function show($curso)
    {
        $cursos = Curso::find($curso);
        //Log del curso
        Log::info($cursos);
        return view('curso', compact('cursos'));
    }
}
