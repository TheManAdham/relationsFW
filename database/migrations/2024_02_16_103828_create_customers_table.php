<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthday');
            $table->string('mobile');
            $table->string('street');
            $table->string('house_number');
            $table->string('zip_code');
            $table->string('city');
            $table->unsignedBigInteger('role_id'); // Add role_id column
            $table->foreign('role_id')->references('id')->on('roles'); 
            // You can add more columns here as needed
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
        Schema::dropIfExists('customers');
    }
}

