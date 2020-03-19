<div class="form-group">
    <label for="name">Id: </label>
    <div class="row">
        <div class="col-lg-10">
            <input type="number" class="form-control" name="id" id="id" value="{{isset($purchaseOrderItems->id) ? $purchaseOrderItems->id : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="email">Id do produto: </label>
    <div class="row">
        <div class="col-lg-10">
            <input type="number" class="form-control" name="product_id" id="product_id" value="{{isset($purchaseOrderItems->product_id) ? $purchaseOrderItems->product_id : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="registration_number">Quantidade comprada: </label>
    <div class="row">
        <div class="col-lg-2">
            <input type="number" class="form-control" name="amount" id="amount" value="{{isset($purchaseOrderItems->amount) ? $purchaseOrderItems->amount : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="registration_number">Id da compra: </label>
    <div class="row">
        <div class="col-lg-2">
            <input type="number" class="form-control" name="purchase_order_id" id="purchase_order_id" value="{{isset($purchaseOrderItems->purchase_order_id) ? $purchaseOrderItems->purchase_order_id : ''}}">
        </div>
    </div>
</div>
