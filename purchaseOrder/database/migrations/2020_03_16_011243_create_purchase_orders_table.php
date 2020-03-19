<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->integer('id')->nullable(false);
            $table->integer('client_id')->nullable(false)->comment('Cliente');
            $table->char('status')->nullable()->comment('Status');
            $table->dateTime('created_at')->nullable()->comment('Data do pedido');
            $table->dateTime('updated_at')->nullable()->comment('Data de modificação');
            $table->primary('id');
            $table->foreign('client_id')->references('id')->on('client')
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
        Schema::dropIfExists('purchase_order');
    }
}
