<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'costo',
        'horas',
    ];

    public function alumnos(): BelongsToMany
    {
        return $this->belongsToMany(Alumno::class, 'cursox_alumnos', 'curso_id', 'alumno_id')
            ->withPivot('maestro_id', 'fecha_inscripcion', 'horas_cursadas', 'estado');
    }

    public function maestros(): BelongsToMany
    {
        return $this->belongsToMany(Maestro::class, 'cursox_alumnos', 'curso_id', 'maestro_id')
            ->withPivot('alumno_id', 'fecha_inscripcion', 'horas_cursadas', 'estado');
    }

    public function alumnosInscritos()
    {
        return $this->alumnos()->wherePivot('estado', 'inscrito');
    }

    public function alumnosAprobados()
    {
        return $this->alumnos()->wherePivot('estado', 'aprobado');
    }

    public function alumnosReprobados()
    {
        return $this->alumnos()->wherePivot('estado', 'reprobado');
    }



}
