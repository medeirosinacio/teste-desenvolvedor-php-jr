<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index() {

        $products = Product::all();
        $subtitle = 'Lista';
        return view('product.index', compact(['products', 'subtitle']));
    }

    public function save(Request $req, $id = null) {

        $product = $req->all();
        //dd($product);
        if(! $req->id) {
            Product::create($product);
        } else {
            Product::find($req->id)->update($product);
        }

        return redirect()->route('product.index');
    }

    public function edit($id = null) {

        if(isset($id)) {
            $product = Product::find($id);
            $subtitle = 'Edição';
            return view('product.edit', compact(['product', 'subtitle']));
        }
        $subtitle = 'Novo';
        return view('product.edit', compact('subtitle'));

    }

    public function delete($id) {

        Product::find($id)->delete();

        return redirect()->route('product.index');
    }
}
