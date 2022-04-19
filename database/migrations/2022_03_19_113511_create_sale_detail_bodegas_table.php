<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleDetailBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_detail_bodegas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->nullable()->references('id')->on('sales');
            $table->foreignId('bodega_id')->nullable()->references('id')->on('bodegas');
            $table->integer('quantity');
            $table->integer('precio');
            $table->integer('descuento');
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
        Schema::dropIfExists('sale_detail_bodegas');
    }
}
