<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'marca',
        'color',
        'kilometraje',
    ];

    public function maestro(): HasMany
    {
        return $this->hasMany(Maestro::class, 'carro_id');
    }
}
