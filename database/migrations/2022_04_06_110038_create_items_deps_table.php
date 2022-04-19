<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsDepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_deps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orders_deps_id');
          
          
            $table->string('quantity')->nullable();
            $table->string('amount')->nullable();
            $table->string('budget')->nullable();
          
  
            $table->foreign('orders_deps_id')->references('id')->on('orders_deps')->onDelete('cascade');
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
        Schema::dropIfExists('items_deps');
    }
}
