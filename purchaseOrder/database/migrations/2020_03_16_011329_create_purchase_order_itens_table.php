<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrderItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_items', function (Blueprint $table) {
            $table->integer('id')->nullable(false);
            $table->integer('product_id')->nullable(false)->comment('Produto');
            $table->integer('amount')->nullable(false)->comment('Quantidade');
            $table->integer('purchase_order_id')->nullable(false)->comment('Numero do pedido');
            $table->dateTime('created_at')->nullable()->comment('Data do pedido');;
            $table->dateTime('updated_at')->nullable()->comment('Data de modificação');;
            $table->primary('id');
            $table->foreign('product_id')->references('id')->on('product')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('purchase_order_id')->references('id')->on('purchase_order')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_order_items');
    }
}
