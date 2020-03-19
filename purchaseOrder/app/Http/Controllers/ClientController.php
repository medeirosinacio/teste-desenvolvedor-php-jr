<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index() {

        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function save(Request $req, $id = null) {

        $client = $req->all();
        //dd($id);
        if(! $req->id) {
            Client::create($client);
        } else {
            Client::find($req->id)->update($client);
        }

        return redirect()->route('client.index');
    }

    public function edit($id = null) {

        if(isset($id)) {
            $client = Client::find($id);

            return view('client.edit', compact('client'));
        }
        return view('client.edit');

    }

    public function delete($id) {

        Client::find($id)->delete();

        return redirect()->route('client.index');
    }
}
