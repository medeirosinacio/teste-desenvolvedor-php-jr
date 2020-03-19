@extends('layout.base')

@section('title', 'Clientes')

@section('content')

    <div class="container">
        <div class="row">
        <h3>Clientes</h3>

            <table class="table table-responsive">
                <thead>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Ação</th>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id }} </td>
                        <td>{{ $client->full_name }} </td>
                        <td>{{ $client->email }} </td>
                        <td>{{ $client->registration_number }} </td>
                        <td>
                            <a href="{{ route('client.edit', ['id' => $client->id]) }}" class="btn-sm btn-warning">Editar</a>
                            <a href="{{ route('client.delete', ['id' => $client->id]) }}" class="btn-sm btn-danger">Excluir</a>
                        </td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            <div class="row">
                <a href="{{ route('client.edit') }}" class="btn btn-primary">Adicionar</a>
            </div>

        </div>
    </div>
@endsection
