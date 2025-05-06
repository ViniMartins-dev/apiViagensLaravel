@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Editar Passageiro</h1>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('user.update', $user['id']) }}">
                    @csrf
                    
                    <!-- Campo de Nome -->
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="{{ $user['nome'] }}" required>
                    </div>

                    <!-- Campo de Sobrenome -->
                    <div class="mb-3">
                        <label for="sobrenome" class="form-label">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="{{ $user['sobrenome'] }}" required>
                    </div>

                    <!-- Campo de CPF (Máscara para facilitar a inserção) -->
                    <div class="mb-3">
                        <label for="CPF" class="form-label">CPF</label>
                        <input type="text" name="CPF" id="CPF" class="form-control" placeholder="{{ $user['CPF'] }}" required>
                    </div>

                    <!-- Campo de Idade -->
                    <div class="mb-3">
                        <label for="idade" class="form-label">Idade</label>
                        <input type="number" name="idade" id="idade" class="form-control" placeholder="{{ $user['idade'] }}" required min="0">
                    </div>

                    <!-- Botões -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
