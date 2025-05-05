@extends('layouts.app')
@section('content')

    <h1>Lista de passageiros</h1>
    
    <a href="{{ route('user.create') }}" class="btn btn-primary" >Cadastrar</a>

    @if(count($usuario)) 
        <table class="table">
            <thead>
                <tr>
                    <!-- ('nome', 'sobrenome', 'CPF', 'idade') -->
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario as $user) 
                    <tr>
                        <th scope="row">{{ $user['nome'] }}</th>
                        <td>{{ $user['sobrenome'] }}</td>
                        <td>{{ $user['CPF'] }}</td>
                        <td>{{ $user['idade'] }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                            <a href="{{ route('user.destroy', $user['id']) }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja exluir?')">Excluir</a>
                        </td>
                    </tr>
                @endforeach  
            </tbody>
        </table>
    @else
        <p>Nenhum Passageiro encontrado.</p>
    @endif
    
@endsection
