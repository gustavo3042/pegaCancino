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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->String('barcode')->unique()->nullable();
            $table->String('color');
            $table->integer('stock')->default(0);
            /*
            $table->integer('totalObillos')->nullable();
            $table->string('image');
            $table->string('brand');

            */
            $table->integer('price');
          
            $table->boolean('status')->default(1);


            $table->foreignId('category_id')->nullable()->references('id')->on('categories');
            $table->foreignId('provider_id')->nullable()->references('id')->on('providers');

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
        Schema::dropIfExists('products');
    }
}
