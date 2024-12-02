<?php

namespace App\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Maestro extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'carro_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function carro(): BelongsTo
    {
        return $this->belongsTo(Carro::class);
    }

    public function cursos(): BelongsToMany
    {
        return $this->belongsToMany(Curso::class, 'cursox_alumnos', 'maestro_id', 'curso_id')->withPivot('horario', 'fecha_inscripcion', 'horas_cursadas', 'estado');
    }

}
