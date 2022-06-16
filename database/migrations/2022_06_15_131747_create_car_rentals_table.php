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
        Schema::create('car_rentals', function (Blueprint $table) {
            $table->id();
            $table->string('customers_ID') ->references('ID')->on('users');
            $table->string('rider_ID')->nullable()->references('id')->on('users');
            $table->date('from');
            $table->date('to');
            // $table->string('vehicle_model');
            // $table->string('plate_no');
            // $table->time('TIME');
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
        Schema::dropIfExists('car_rentals');
    }
};
