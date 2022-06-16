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
        Schema::create('food_orders', function (Blueprint $table) {
            $table->id();
            $table->string('food_destination');
            $table->string('vendor');
            $table->string('food')->nullable();
            $table->string('cust_ID')->references('ID')->on('users');
            $table->string('rider_ID')->nullable()->references('id')->on('users');
            $table->double('delivery_charge');
            $table->timestamps();
            $table->double( column: 'order_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_orders');
    }
};
