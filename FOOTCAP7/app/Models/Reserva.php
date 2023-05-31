<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'fecha_reserva',
        'hora_inicio_reserva',
        'hora_fin_reserva',
        'arbitro',
        'metodo_pago',
        'comprobante_pago',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($reserva) {
            // Crear el registro correspondiente en la tabla "Partidos"
            Partido::create([
                'user_id' => $reserva->user_id,
                'cancha_id' => $reserva->cancha_id,
                'reserva_id' => $reserva->id,
                'arbitro' => false,
                'estado' => 'Pendiente'
            ]);
        });
    }
    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con el modelo Cancha
    public function cancha()
    {
        return $this->belongsTo(Cancha::class, 'cancha_id');
    }
    
    public function partidos()
{
    return $this->hasMany(Partido::class);
}
    use HasFactory;
}
