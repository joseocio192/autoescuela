<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cursos() : BelongsToMany
    {
        return $this->belongsToMany(Curso::class, 'cursox_alumnos', 'alumno_id', 'curso_id')
            ->withPivot('maestro_id','horario', 'fecha_inscripcion', 'horas_cursadas', 'estado');
    }
}
