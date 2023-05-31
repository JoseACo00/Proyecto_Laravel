<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = [
        'user_id',
        'cancha_id',
        'reserva_id',
        'arbitro',
        'estado',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function cancha()
    {
        return $this->belongsTo(Cancha::class);
    }
    
    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
    use HasFactory;
}
