@extends('layout.base')

@section('title', 'Clientes')

@section('content')

    <div class="container">

            <h3>Clientes</h3>

            <form action="{{ route('client.save', ['id' => isset($client->id) ? $client->id : '']) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('client._form')
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>

    </div>
@endsection
