<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();


            $table->foreignId('client_id')->nullable()->references('id')->on('clients');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');

            $table->dateTime('date');

            $table->decimal('iva');
            $table->decimal('total');
            $table->decimal('totalSinDesc');

            $table->boolean('status')->default(1);



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
        Schema::dropIfExists('sales');
    }
}
