<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->nullable(false)->comment('ID');
            $table->string('name', 255)->nullable(false)->comment('Produto');
            $table->longText('barcode')->nullable()->comment('Codigo de barras');
            $table->decimal('price', 10, 2)->nullable()->comment('Valor unitário');
            $table->integer('amount')->nullable()->default(0)->comment('Quantidade');
            $table->dateTime('created_at')->nullable()->comment('Data de criação');
            $table->dateTime('updated_at')->nullable()->comment('Data de modificação');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
