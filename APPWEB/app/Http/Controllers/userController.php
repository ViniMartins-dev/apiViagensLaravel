<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    //endpoint api
    
    private $urlAPI = "http://127.0.0.1:8001/api/passageiro";

    //função pra retornar a view com os dados entregues da api

    public function index() {

        $response = Http::get($this->urlAPI);
        $data = $response->json();

        return view('user.index', ['usuario' => $data['data'] ?? [], 'message' => $data['message'] ?? '']);

    }

    public function store(Request $request) {

        $user = Http::post($this->urlAPI, $request->only('nome', 'sobrenome', 'CPF', 'idade'));

        /* echo $user; */

        return redirect()->route('user.index');

    }

    public function create() {

        return view('user.create');

    }

    public function edit($id) {

        $response = Http::get("$this->urlAPI/$id");
        $user = $response->json() ['data'] ?? null;

        return view('user.edit', compact('user'));

    }

    public function update(Request $request, $id) {

        Http::put("$this->urlAPI/$id", $request->only('nome', 'sobrenome', 'CPF', 'idade'));

        return redirect()->route('user.index');

    }

    public function destroy($id) {
        Http::delete("$this->urlAPI/$id");
        return redirect()->route('user.index');
    }
}
