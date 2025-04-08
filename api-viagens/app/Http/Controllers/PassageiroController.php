<?php

namespace App\Http\Controllers;

use App\Models\Passageiro;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class PassageiroController extends Controller
{
   
    public function index()
    {
        $regBook = Passageiro::All();
        $qtdPassageiros = $regBook->count();

        if ($qtdPassageiros > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Passageiros encontradas com sucesso',
                'data' => $regBook,
                'total' => $qtdPassageiros
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Nenhum Passageiro encontrada',
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'sobrenome' => 'required',
            'CPF' => 'required',
            'idade' => 'required',
            'id_voo' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Registros inválidos',
                'errors' => $validator->errors()
            ], 400);
        }

        $regBook = Passageiro::create($request->all());

        if ($regBook) {
            return response()->json([
                'success' => true,
                'message' => 'Passageiro cadastrado com sucesso!',
                'data' => $regBook
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar passageiro'
            ], 500);
        }

    }

    public function show($id)
    {
        $regBook = Passageiro::find($id);

        if ($regBook) {
            return response()->json([
                'success' => true,
                'message' => 'Passageiro localizado com sucesso',
                'data' => $regBook
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Passageiro não localizado'
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $regBook = Passageiro::find($id);
        
        if (!$regBook) {
            return response()->json([
                'success' => false,
                'message' => 'Passageiro não encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'sobrenome' => 'required',
            'CPF' => 'required',
            'idade' => 'required',
            'id_voo' => 'required',
        ]);;

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Registros inválidos',
                'errors' => $validator->errors()
            ], 400);
        }

        $regBook->nome = $request->nome;
        $regBook->sobrenome = $request->sobrenome;
        $regBook->CPF = $request->CPF;
        $regBook->idade = $request->idade;
        $regBook->id_voo = $request->id_voo;

        if ($regBook->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Passageiro atualizado com sucesso',
                'data' => $regBook
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar passageiro'
            ], 500);
        }
    }

    public function destroy($id)
    {
        $regBook = Passageiro::find($id);

        if (!$regBook) {
            return response()->json([
                'success' => false,
                'message' => 'Passageiro não encontrado'
            ], 404);
        }

        if ($regBook->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Passageiro deletado com sucesso'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao deletar Passageiro'
            ], 500);
        }
    }
}
