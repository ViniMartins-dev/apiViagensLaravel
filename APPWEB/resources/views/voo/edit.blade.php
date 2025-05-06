@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Editar Voo</h1>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('voo.update', $voo['id']) }}">
                    @csrf

                    <!-- Campo origem -->
                    <div class="mb-3">
                        <label for="origem" class="form-label">Origem</label>
                        <input type="text" name="origem" class="form-control" value="{{ $voo['origem'] }}" required>
                    </div>

                    <!-- Campo destino -->
                    <div class="mb-3">
                        <label for="destino" class="form-label">Destino</label>
                        <input type="text" name="destino" class="form-control" value="{{ $voo['destino'] }}" required>
                    </div>

                    <!-- Campo Hora -->
                    <div class="mb-3">
                        <label for='horario' class="form-label">Hora</label>
                        <input type="text" name="horario" class="form-control" value="{{ $voo['horario'] }}" required>
                    </div>

                    <!-- Campo portão de embarque -->
                    <div class="mb-3">
                        <label for="protao_embarque" class="form-label">Portão de embarque</label>
                        <input type="text" name="portao_embarque" class="form-control" value="{{ $voo['portao_embarque'] }}" required>
                    </div>

                    <!-- Botões -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('voo.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection