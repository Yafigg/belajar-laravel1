<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction-details', function (Blueprint $table) {
            $table->integer("id")->autoIncrement();
            $table->integer('id_transaksi');
            $table->integer('id_produk');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign("id_transaksi")->references("id")->on("transactions");
            $table->foreign("id_produk")->references('id')->on("product");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction-details');
    }
};