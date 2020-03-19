<div class="form-group">
    <label for="registration_number">Id: </label>
    <div class="row">
        <div class="col-lg-2">
            <input type="text" class="form-control" name="status" id="status" value="{{isset($purchaseOrder->id) ? $purchaseOrder->id : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="registration_number">Status: </label>
    <div class="row">
        <div class="col-lg-2">
            <input type="text" class="form-control" name="status" id="status" value="{{isset($purchaseOrder->status) ? $purchaseOrder->status : ''}}">
        </div>
    </div>
</div>
