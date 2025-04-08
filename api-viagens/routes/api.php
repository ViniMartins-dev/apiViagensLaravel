<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassageiroController;
use App\Http\Controllers\VooController;

//Rotas Passageiro
Route::post('/passageiro', [PassageiroController::class,'store']);             //inserir um novo objeto

Route::get('/passageiro', [PassageiroController::class,'index']);              //vizualizar todos os objetos cadastrados

Route::get('/passageiro/{id}', [PassageiroController::class,'show']);          //vizualizar um único objeto

Route::put('/passageiro/{id}', [PassageiroController::class,'update']);        //atualizar os dados de um objeto

Route::delete('/passageiro/{id}', [PassageiroController::class,'destroy']);    //deletar um objeto da base de dados

//Rotas Voo
Route::post('/voo', [VooController::class,'store']);                            //inserir um novo objeto

Route::get('/voo', [VooController::class,'index']);                             //vizualizar todos os objetos cadastrados

Route::get('/voo/{id}', [VooController::class,'show']);                         //vizualizar um único objeto

Route::put('/voo/{id}', [VooController::class,'update']);                       //atualizar os dados de um objeto

Route::delete('/voo/{id}', [VooController::class,'destroy']);                   //deletar um objeto da base de dados

//Rotas especiais
