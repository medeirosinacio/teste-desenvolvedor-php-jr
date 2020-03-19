<?php

namespace App\Http\Controllers;

use App\PurchaseOrderItens;
use Illuminate\Http\Request;

class PurchaseOrderItemController extends Controller
{
    public function index() {

        $purchaseOrderItems = PurchaseOrderItens::all();
        $subtitle = 'Lista';
        return view('purchase_order_item.index', compact(['purchaseOrderItems', 'subtitle']));
    }

    public function save(Request $req, $id = null) {

        $purchaseOrderItem = $req->all();
        //dd($product);
        if(! $req->id) {
            PurchaseOrderItens::create($purchaseOrderItem);
        } else {
            PurchaseOrderItens::find($req->id)->update($purchaseOrderItem);
        }

        return redirect()->route('purchase_order_item.index');
    }

    public function edit($id = null) {

        if(isset($id)) {
            $purchaseOrderItem = PurchaseOrderItens::find($id);
            $subtitle = 'Edição';
            return view('purchase_order_item.edit', compact(['purchaseOrderItem', 'subtitle']));
        }
        $subtitle = 'Novo';
        return view('purchase_order_item.edit', compact('subtitle'));

    }

    public function delete($id) {

        PurchaseOrderItens::find($id)->delete();

        return redirect()->route('purchase_order_item.index');
    }
}
