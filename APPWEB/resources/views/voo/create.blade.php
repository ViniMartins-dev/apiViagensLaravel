@extends('layouts.app')

@section('content')
    <h1>Cadastrar novo Voo</h1>

    <form method="post" action="{{route('voo.store')}}">

        @csrf

            <!-- 'origem', 'destino', 'horario', 'portao_embarque' -->

            <div class="mb-3">

                <label for="origem">Origem</label>
                <input type="text" name="origem" class="form-control" required>
            
            </div>

            <div class="mb-3">

                <label for="destino">Destino</label>
                <input type="text" name="destino" class="form-control" required>

            </div>

            <div class="mb-3">
            
                <label for="horario">Horario</label>
                <input type="text" name="horario" class="form-control" required>

            </div>

            <div class="mb-3">
            
                <label for="portao_embarque">Portão de embarque</label>
                <input type="text" name="portao_embarque" class="form-control" required>

            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{route('voo.index')}}" class="btn btn-secundary">Cancelar</a>


    </form>

@endsection