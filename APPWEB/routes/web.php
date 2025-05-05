<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\vooController;
/* use App\Http\Controllers\passagemController; */

Route::get('passageiro/',  [userController::class, 'index'])->name('user.index');
Route::get('passageiro/create', [userController::class, 'create'])->name('user.create');
Route::post('passageiro/store', [userController::class, 'store'])->name('user.store');
Route::get('passageiro/edit/{id}', [userController::class, 'edit'])->name('user.edit');
Route::post('passageiro/update/{id}', [userController::class, 'update'])->name('user.update');
Route::get('passageiro/delete/{id}', [userController::class, 'destroy'])->name('user.destroy');

Route::get('voo/',  [vooController::class, 'index'])->name('voo.index');
Route::get('voo/create', [vooController::class, 'create'])->name('voo.create');
Route::post('voo/store', [vooController::class, 'store'])->name('voo.store');
Route::get('voo/edit/{id}', [vooController::class, 'edit'])->name('voo.edit');
Route::post('voo/update/{id}', [vooController::class, 'update'])->name('voo.update');
Route::get('voo/delete/{id}', [vooController::class, 'destroy'])->name('voo.destroy');

