<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index() {

        $purchaseOrders = PurchaseOrder::all();
        $subtitle = 'Lista';
        return view('purchase_order.index', compact(['purchaseOrders', 'subtitle']));
    }

    public function save(Request $req, $id = null) {

        $purchaseOrder = $req->all();
        //dd($product);
        if(! $req->id) {
            PurchaseOrder::create($purchaseOrder);
        } else {
            PurchaseOrder::find($req->id)->update($purchaseOrder);
        }

        return redirect()->route('purchase_order.index');
    }

    public function edit($id = null) {

        if(isset($id)) {
            $purchaseOrder = PurchaseOrder::find($id);
            $subtitle = 'Edição';
            return view('purchase_order.edit', compact(['purchaseOrder', 'subtitle']));
        }
        $subtitle = 'Novo';
        return view('purchase_order.edit', compact('subtitle'));

    }

    public function delete($id) {

        PurchaseOrder::find($id)->delete();

        return redirect()->route('purchase_order.index');
    }
}
