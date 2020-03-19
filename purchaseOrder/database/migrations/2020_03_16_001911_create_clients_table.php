<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->nullable(false)->comment('ID');
            $table->string('full_name', 100)->nullable(false)->comment('Nome completo');
            $table->string('email', 100)->nullable(false)->comment('Email');
            $table->string('registration_number', 11)->nullable()->comment('CPF');
            $table->dateTime('created_at')->nullable()->comment('Data de criação');
            $table->dateTime('updated_at')->nullable()->comment('Data de modificação');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
