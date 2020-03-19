@extends('layout.base')

@section('title', 'Clientes')

@section('content')

    <div class="container">

        <h3>Produtos - {{$subtitle}}</h3>

        <form action="{{ route('product.save', ['id' => isset($product->id) ? $product->id : '']) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('product._form')
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>

    </div>
@endsection
