@extends('layout.base')

@section('title', 'Ordem de Compra')

@section('content')

    <div class="container">

        <h3>Produtos - {{$subtitle}}</h3>

        <form action="{{ route('purchase_order.save', ['id' => isset($purchaseOrder->id) ? $purchaseOrder->id : '']) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('purchase_order._form')
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>

    </div>
@endsection
