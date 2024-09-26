<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoxAlumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'alumno_id',
        'maestro_id',
        'horario',
        'fecha_inscripcion',
        'horas_cursadas',
        'estado',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function maestro()
    {
        return $this->belongsTo(Maestro::class);
    }
}
