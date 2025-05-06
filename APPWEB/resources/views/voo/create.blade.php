@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Cadastrar Novo Voo</h1>
            </div>
        </div>

        <div class="card-body">
            <form method="post" action="{{route('voo.store')}}">
                @csrf

                <!-- Campo de origem -->
                <div class="mb-3">
                    <label for="origem" class="form-label">Origem</label>
                    <input type="text" name="origem" class="form-control" required>
                </div>

                <!-- Campo de destino -->
                <div class="mb-3">
                    <label for="destino" class="form-label">Destino</label>
                    <input type="text" name="destino" class="form-control" required>
                </div>

                <!-- Campo de horario 2025-05-05 14:23:45-->
                <div class="mb-3">
                    <label for="horario" class="form-label">Horario</label>
                    <input type="text" name="horario" class="form-control" required>
                </div>

                <!-- Campo de portão de embarque -->
                <div class="mb-3">
                    <label for="portao_embarque" class="form-label">Portão de embarque</label>
                    <input type="text" name="portao_embarque" class="form-control" required>
                </div>

                <!-- Botões -->
                <div class="d-flex justfy-content-between">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{route('voo.index')}}" class="btn btn-secundary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection