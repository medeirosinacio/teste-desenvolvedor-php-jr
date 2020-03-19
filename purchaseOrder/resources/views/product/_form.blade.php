<div class="form-group">
    <label for="name">Nome: </label>
    <div class="row">
        <div class="col-lg-10">
            <input type="registration_number" class="form-control" name="name" id="name" value="{{isset($product->name) ? $product->name : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="email">Cód. barras: </label>
    <div class="row">
        <div class="col-lg-10">
            <input type="text" class="form-control" name="barcode" id="barcode" value="{{isset($product->barcode) ? $product->barcode : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="registration_number">Preço: </label>
    <div class="row">
        <div class="col-lg-2">
            <input type="text" class="form-control" name="price" id="price" value="{{isset($product->price) ? $product->price : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="registration_number">Quantidade: </label>
    <div class="row">
        <div class="col-lg-2">
            <input type="number" class="form-control" name="amount" id="amount" value="{{isset($product->amount) ? $product->amount : ''}}">
        </div>
    </div>
</div>
