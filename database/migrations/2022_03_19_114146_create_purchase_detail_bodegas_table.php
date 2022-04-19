<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_detail_bodegas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->nullable()->references('id')->on('purchases');
            $table->foreignId('bodega_id')->nullable()->references('id')->on('bodegas');


            $table->integer('quantity');
            $table->integer('price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_detail_bodegas');
    }
}
