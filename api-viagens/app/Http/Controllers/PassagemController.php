<?php

namespace App\Http\Controllers;

use App\Models\Passageiro;
use App\Models\Voo;
use Illuminate\Http\Request;

class PassagemController extends Controller
{
    public function show($id_passageiro)
    {
        $passageiro = Passageiro::find($id_passageiro);

        $id_voo = $passageiro->id_voo;

        $voo = Voo::find($id_voo);

        if ($passageiro && $voo) {
            return response()->json([
                'success' => true,
                'message' => 'Passagem localizada com sucesso',
                'passageiro' => $passageiro,
                'voo' => $voo
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Passagem não localizado'
            ], 404);
        }
    }
}
