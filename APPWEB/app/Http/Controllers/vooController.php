<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class vooController extends Controller
{
    //endpoint api
    
    private $urlAPI = "http://127.0.0.1:8001/api/voo";

    //função pra retornar a view com os dados entregues da api

    public function index() {

        $response = Http::get($this->urlAPI);
        $data = $response->json();

        return view('voo.index', ['voos' => $data['data'] ?? [], 'message' => $data['message'] ?? '']);

    }

    public function store(Request $request) {

        Http::post($this->urlAPI, $request->only('origem', 'destino', 'horario', 'portao_embarque'));

        return redirect()->route('voo.index');

    }

    public function create() {

        return view('voo.create');

    }

    public function edit($id) {

        $response = Http::get("$this->urlAPI/$id");
        $voo = $response->json() ['data'] ?? null;

        return view('voo.edit', compact('voo'));

    }

    public function update(Request $request, $id) {

        Http::put("$this->urlAPI/$id", $request->only('origem', 'destino', 'horario', 'portao_embarque'));

        return redirect()->route('voo.index');

    }

    public function destroy($id) {
        Http::delete("$this->urlAPI/$id");
        return redirect()->route('voo.index');
    }
}
