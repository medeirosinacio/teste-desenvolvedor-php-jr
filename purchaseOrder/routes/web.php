<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato/{id?}', ['uses' => 'ClientController@index']);

Route::post('/contato', function () {
    dd($_POST);
    return 'Contato POST';
});

//Clientes
Route::get('/client/list', ['as' => 'client.index', 'uses' => 'ClientController@index']);
Route::post('/client/save', ['as' => 'client.save', 'uses' => 'ClientController@save']);
Route::get('/client/edit/{id?}', ['as' => 'client.edit', 'uses' => 'ClientController@edit']);
Route::get('/client/delete/{id}', ['as' => 'client.delete', 'uses' => 'ClientController@delete']);

//Produtos
Route::get('/product/list', ['as' => 'product.index', 'uses' => 'ProductController@index']);
Route::post('/product/save', ['as' => 'product.save', 'uses' => 'ProductController@save']);
Route::get('/product/edit/{id?}', ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
Route::get('/product/delete/{id}', ['as' => 'product.delete', 'uses' => 'ProductController@delete']);

//Pedidos
Route::get('/purchase_order/list', ['as' => 'purchase_order.index', 'uses' => 'PurchaseOrderController@index']);
Route::post('/purchase_order/save', ['as' => 'purchase_order.save', 'uses' => 'PurchaseOrderController@save']);
Route::get('/purchase_order/edit/{id?}', ['as' => 'purchase_order.edit', 'uses' => 'PurchaseOrderController@edit']);
Route::get('/purchase_order/delete/{id}', ['as' => 'purchase_order.delete', 'uses' => 'PurchaseOrderController@delete']);

//Pedidos Itens
Route::get('/purchase_order_item/list', ['as' => 'purchase_order_item.index', 'uses' => 'PurchaseOrderItemController@index']);
Route::post('/purchase_order_item/save', ['as' => 'purchase_order_item.save', 'uses' => 'PurchaseOrderItemController@save']);
Route::get('/purchase_order_item/edit/{id?}', ['as' => 'purchase_order_item.edit', 'uses' => 'PurchaseOrderItemController@edit']);
Route::get('/purchase_order_item/delete/{id}', ['as' => 'purchase_order_item.delete', 'uses' => 'PurchaseOrderItemController@delete']);
