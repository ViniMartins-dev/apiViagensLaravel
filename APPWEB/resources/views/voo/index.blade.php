@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Lista de Voos</h1>
                <a href="{{ route('voo.create') }}" class="btn btn-primary" >Cadastrar novo Voo</a>
                <a href="http://127.0.0.1:8000/passageiro" class="btn btn-primary" >Ver Lista de Passageiros</a>
            </div>

            <div class="card-body">
                @if(count($voos)) 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Origem</th>
                                <th scope="col">Destino</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Portão de Embarque</th>
                                <th scope="col" class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($voos as $voo) 
                                <tr>
                                    <th scope="row">{{ $voo['origem'] }}</th>
                                    <td>{{ $voo['destino'] }}</td>
                                    <td>{{ $voo['horario'] }}</td>
                                    <td>{{ $voo['portao_embarque'] }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('voo.edit', $voo['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="{{ route('voo.destroy', $voo['id']) }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja exluir?')">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach  
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info">
                        <p>Nenhum Voo encontrado.</p>
                    </div>
                @endif
            </div>
        </div> 
    </div>  
@endsection
