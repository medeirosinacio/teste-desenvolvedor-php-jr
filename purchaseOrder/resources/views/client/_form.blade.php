<div class="form-group">
    <label for="name">Nome: </label>
    <div class="row">
        <div class="col-lg-10">
    <input type="text" class="form-control" name="full_name" id="full_name" value="{{isset($client->full_name) ? $client->full_name : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="email">Email: </label>
    <div class="row">
        <div class="col-lg-10">
    <input type="email" class="form-control" name="email" id="email" value="{{isset($client->email) ? $client->email : ''}}">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="registration_number">CPF: </label>
    <div class="row">
        <div class="col-lg-10">
    <input type="registration_number" class="form-control" name="registration_number" id="registration_number" value="{{isset($client->registration_number) ? $client->registration_number : ''}}">
        </div>
    </div>
</div>
