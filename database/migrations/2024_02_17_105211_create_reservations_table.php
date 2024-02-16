<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('location_id');
            $table->enum('time', ['9:00 AM', '12:00 PM']);
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->unsignedBigInteger('invoice_id')->nullable(); // Add invoice_id column
            $table->timestamps();
        
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('instructor_id')->references('id')->on('instructors'); // Define foreign key constraint for instructor_id
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('invoice_id')->references('id')->on('invoices');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}

