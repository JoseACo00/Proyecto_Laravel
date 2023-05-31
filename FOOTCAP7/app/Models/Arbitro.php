<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
    protected $fillable = [
        'nombre', 'apellido_1', 'apellido_2', 'email', 'telefono', 'experiencia', 'disponibilidad'
    ];
    
    use HasFactory;
}
