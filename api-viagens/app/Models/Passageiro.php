<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passageiro extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'CPF',
        'idade',
    ];
}
