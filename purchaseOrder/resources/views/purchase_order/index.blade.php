@extends('layout.base')

@section('title', 'Ordem de Compra')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Ordem de compra</h3>

            <table class="table table-responsive">
                <thead>
                <th>Id</th>
                <th>Status</th>
                <th>Ação</th>
                </thead>
                <tbody>
                @foreach($purchaseOrders as $purchaseOrder)
                    <tr>
                        <td>{{ $purchaseOrder->id }} </td>
                        <td>{{ $purchaseOrder->status }} </td>
                        <td>
                            <a href="{{ route('purchase_order.edit', ['id' => $purchaseOrder->id]) }}" class="btn-sm btn-warning">Editar</a>
                            <a href="{{ route('purchase_order.delete', ['id' => $purchaseOrder->id]) }}" class="btn-sm btn-danger">Excluir</a>
                        </td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            <div class="row">
                <a href="{{ route('purchase_order.edit') }}" class="btn btn-primary">Adicionar</a>
            </div>

        </div>
    </div>
@endsection
