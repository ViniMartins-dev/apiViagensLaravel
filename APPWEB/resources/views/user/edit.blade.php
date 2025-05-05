@extends('layouts.app')

@section('content')
    <h1>Editar Passageiro</h1>
    
    <form method="POST" action="{{ route('user.update', $user['id']) }}">
        @csrf
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $user['nome'] }}" required>
        </div>

        <div class="mb-3">
            <label>Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" value="{{ $user['sobrenome'] }}" required>
        </div>

        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="CPF" class="form-control" value="{{ $user['CPF'] }}" required>
        </div>

        <div class="mb-3">
            <label>Idade</label>
            <input type="number" name="idade" class="form-control" value="{{ $user['idade'] }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection