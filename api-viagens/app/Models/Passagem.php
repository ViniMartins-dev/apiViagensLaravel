<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passagem extends Model
{ 
    
    protected $fillable = ['passageiro_id', 'voo_id'];

    // Definindo o relacionamento reverso (uma passagem pertence a um passageiro)
    public function passageiro()
    {
        return $this->belongsTo(Passageiro::class, 'passageiro_id');
    }

    // Definindo o relacionamento reverso (uma passagem pertence a um voo)
    public function voo()
    {
        return $this->belongsTo(Voo::class, 'voo_id');
    }
}
