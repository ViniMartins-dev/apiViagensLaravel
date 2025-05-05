@extends('layouts.app')

@section('content')
    <h1>Cadastrar novo usuario</h1>

    <form method="post" action="{{route('user.store')}}">

        @csrf

            <div class="mb-3">

                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            
            </div>

            <div class="mb-3">

                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" required>

            </div>

            <div class="mb-3">
            
                <label for="CPF">CPF</label>
                <input type="text" name="CPF" class="form-control" required>

            </div>

            <div class="mb-3">
            
                <label for="idade">Idade</label>
                <input type="number" name="idade" class="form-control" required>

            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{route('user.index')}}" class="btn btn-secundary">Cancelar</a>


    </form>

@endsection