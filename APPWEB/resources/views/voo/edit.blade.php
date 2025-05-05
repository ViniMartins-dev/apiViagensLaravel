@extends('layouts.app')

@section('content')
    <h1>Editar Voos</h1>
    
    <form method="POST" action="{{ route('voo.update', $voo['id']) }}">
        @csrf

        <!-- 2025-05-05 14:23:45 -->
        <!-- 'origem', 'destino', 'horario', 'portao_embarque' -->


        <div class="mb-3">
            <label>Origem</label>
            <input type="text" name="origem" class="form-control" value="{{ $voo['origem'] }}" required>
        </div>

        <div class="mb-3">
            <label>Destino</label>
            <input type="text" name="destino" class="form-control" value="{{ $voo['destino'] }}" required>
        </div>

        <div class="mb-3">
            <label>Hora</label>
            <input type="text" name="horario" class="form-control" value="{{ $voo['horario'] }}" required>
        </div>

        <div class="mb-3">
            <label>Portão de embarque</label>
            <input type="text" name="portao_embarque" class="form-control" value="{{ $voo['portao_embarque'] }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('voo.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection