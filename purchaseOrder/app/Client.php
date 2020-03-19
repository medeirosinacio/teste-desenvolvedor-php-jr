<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "client";
    protected $fillable = [
      'full_name', 'email', 'registration_number'
    ];

    public function list() {

        return (object) [
            'nome' => 'Wagnner',
            'tel' => '51985494014'
        ];
    }
}
