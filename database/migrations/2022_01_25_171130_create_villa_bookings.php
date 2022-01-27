<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillaBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villa_bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('villaid')->unsigned();
            $table->foreign('villaid')->references('id')->on('villas')->onDelete('cascade');
            $table->bigInteger('vguestid')->unsigned();
            $table->foreign('vguestid')->references('id')->on('villa_guests')->onDelete('cascade');
          
            $table->date('checkin_date');
            $table->string('checkout_date');
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
        Schema::dropIfExists('villa_bookings');
    }
}
