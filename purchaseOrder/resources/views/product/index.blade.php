@extends('layout.base')

@section('title', 'Produtos')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Produtos - {{$subtitle}}</h3>

            <table class="table table-responsive">
                <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Cód. barras</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ação</th>
                </thead>
                <tbody>
                @if(! empty($products))
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }} </td>
                            <td>{{ $product->name }} </td>
                            <td>{{ $product->barcode }} </td>
                            <td>{{ $product->price }} </td>
                            <td>{{ $product->amount }} </td>
                            <td>
                                <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn-sm btn-warning">Editar</a>
                                <a href="{{ route('product.delete', ['id' => $product->id]) }}" class="btn-sm btn-danger">Excluir</a>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                @else
                    <tr><td>Nenhum registro encontrado</td></tr>
                    @endif
                </tbody>

            </table>
            <div class="row">
                <div class="col">
                    <a href="{{ route('product.edit') }}" class="btn btn-primary">Adicionar</a>
                </div>
            </div>

        </div>
    </div>
@endsection
