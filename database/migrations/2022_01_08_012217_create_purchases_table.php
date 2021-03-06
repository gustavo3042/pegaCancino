<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();

           
            $table->foreignId('provider_id')->nullable()->references('id')->on('providers');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');

            $table->dateTime('date');
            $table->decimal('iva');
            $table->decimal('total');



            $table->boolean('status')->default(1);

            $table->String('picture')->nullable();


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
        Schema::dropIfExists('purchases');
    }
}
