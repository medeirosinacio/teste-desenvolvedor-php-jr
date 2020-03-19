@extends('layout.base')

@section('title', 'Ordem de Compra')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Itens da compra</h3>

            <table class="table table-responsive">
                <thead>
                <th>Id</th>
                <th>Id do produto</th>
                <th>Quantidade comprada</th>
                <th>Id da compra</th>
                <th>Ação</th>
                </thead>
                <tbody>
                @foreach($purchaseOrderItems as $purchaseOrderItem)
                    <tr>
                        <td>{{ $purchaseOrderItem->id }} </td>
                        <td>{{ $purchaseOrderItem->product_id }} </td>
                        <td>{{ $purchaseOrderItem->amount }} </td>
                        <td>{{ $purchaseOrderItem->purchase_order_id }} </td>
                        <td>{{ $purchaseOrderItem->status }} </td>
                        <td>
                            <a href="{{ route('purchase_order_item.edit', ['id' => $purchaseOrderItem->id]) }}" class="btn-sm btn-warning">Editar</a>
                            <a href="{{ route('purchase_order_item.delete', ['id' => $purchaseOrderItem->id]) }}" class="btn-sm btn-danger">Excluir</a>
                        </td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            <div class="row">
                <a href="{{ route('purchase_order_item.edit') }}" class="btn btn-primary">Adicionar</a>
            </div>

        </div>
    </div>
@endsection
