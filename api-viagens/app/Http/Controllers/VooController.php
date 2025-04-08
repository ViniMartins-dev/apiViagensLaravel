<?php

namespace App\Http\Controllers;

use App\Models\Voo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class VooController extends Controller
{
    public function index()
    {
        $regBook = Voo::All();
        $qtdVoos = $regBook->count();

        if ($qtdVoos > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Voos encontrados com sucesso',
                'data' => $regBook,
                'total' => $qtdVoos
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Nenhum Voo encontrado',
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'origem' => 'required',
            'destino' => 'required',
            'horario' => 'required',
            'portao_embarque' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Registros inválidos',
                'errors' => $validator->errors()
            ], 400);
        }

        $regBook = Voo::create($request->all());

        if ($regBook) {
            return response()->json([
                'success' => true,
                'message' => 'Voo cadastrado com sucesso!',
                'data' => $regBook
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar Voo'
            ], 500);
        }

    }

    public function show($id)
    {
        $regBook = Voo::find($id);

        if ($regBook) {
            return response()->json([
                'success' => true,
                'message' => 'Voo localizado com sucesso',
                'data' => $regBook
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Voo não localizado'
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $regBook = Voo::find($id);
        
        if (!$regBook) {
            return response()->json([
                'success' => false,
                'message' => 'Voo não encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'origem' => 'required',
            'destino' => 'required',
            'horario' => 'required',
            'portao_embarque' => 'required'
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Registros inválidos',
                'errors' => $validator->errors()
            ], 400);
        }

        $regBook->origem = $request->origem;
        $regBook->destino = $request->destino;
        $regBook->horario = $request->horario;
        $regBook->portao_embarque = $request->portao_embarque;

        if ($regBook->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Voo atualizado com sucesso',
                'data' => $regBook
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar Voo'
            ], 500);
        }
    }

    public function destroy($id)
    {
        $regBook = Voo::find($id);

        if (!$regBook) {
            return response()->json([
                'success' => false,
                'message' => 'Voo não encontrado'
            ], 404);
        }

        if ($regBook->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Voo deletado com sucesso'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao deletar Voo'
            ], 500);
        }
    }
}
