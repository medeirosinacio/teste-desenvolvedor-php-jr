<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ route('client.index') }}">Clientes</a>
                <a class="nav-item nav-link" href="{{ route('product.index') }}">Produtos</a>
                <a class="nav-item nav-link" href="{{ route('purchase_order.index') }}">Pedidos</a>
                <a class="nav-item nav-link" href="{{ route('purchase_order_item.index') }}">Itens Pedidos</a>
            </div>
        </div>
    </nav>

    <title>@yield('title')</title>
</head>
