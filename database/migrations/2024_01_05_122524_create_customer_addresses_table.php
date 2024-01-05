<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->string('street');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->enum('type', ['billing', 'shipping']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
};
