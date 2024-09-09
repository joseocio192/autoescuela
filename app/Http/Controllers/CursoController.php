<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function show($curso)
    {
        $cursoA = Curso::find($curso);
        return view('curso', compact('cursoA'));
    }
}
