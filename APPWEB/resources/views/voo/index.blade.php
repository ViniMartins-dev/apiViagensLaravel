@extends('layouts.app')
@section('content')

    <h1>Lista de Voos</h1>
    
    <a href="{{ route('voo.create') }}" class="btn btn-primary" >Cadastrar</a>

    @if(count($voos)) 
        <table class="table">
            <thead>
                <tr>
            <!-- 'origem', 'destino', 'horario', 'portao_embarque' -->
                    <th scope="col">Origem</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Portão de Embarque</th>
                </tr>
            </thead>
            <tbody>
                @foreach($voos as $voo) 
                    <tr>
                        <th scope="row">{{ $voo['origem'] }}</th>
                        <td>{{ $voo['destino'] }}</td>
                        <td>{{ $voo['horario'] }}</td>
                        <td>{{ $voo['portao_embarque'] }}</td>
                        <td>
                            <a href="{{ route('voo.edit', $voo['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                            <a href="{{ route('voo.destroy', $voo['id']) }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja exluir?')">Excluir</a>
                        </td>
                    </tr>
                @endforeach  
            </tbody>
        </table>
    @else
        <p>Nenhum Voo encontrado.</p>
    @endif
    
@endsection
