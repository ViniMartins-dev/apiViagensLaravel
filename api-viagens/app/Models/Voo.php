<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voo extends Model
{
    protected $fillable = [
        'origem',
        'destino',
        'horario',
        'portao_embarque'
    ];

    public function passageiros()
    {
        return $this->belongsToMany(Passageiro::class, 'passagem_voo');
    }
}
