@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Lista de Passageiros</h1>
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Cadastrar Novo Passageiro</a>
            </div>

            <div class="card-body">
                @if(count($usuario))
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Sobrenome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Idade</th>
                                <th scope="col" class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuario as $user)
                                <tr>
                                    <th scope="row">{{ $user['nome'] }}</th>
                                    <td>{{ $user['sobrenome'] }}</td>
                                    <td>{{ $user['CPF'] }}</td>
                                    <td>{{ $user['idade'] }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="{{ route('user.destroy', $user['id']) }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach  
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info">
                        <p>Nenhum Passageiro encontrado.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
