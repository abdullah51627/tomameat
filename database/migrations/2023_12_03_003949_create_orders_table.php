<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_email');
            $table->string('deliver_address');
            $table->string('order_details');
            $table->float('coupon_code')->nullable();
            $table->double('amount',8,2);
            $table->string('payment_mode');
            $table->string('shipping_status')->default('pending');
            $table->string('delivery_status')->default('pending');
            $table->tinyInteger('order_cancel_status')->default('0');
            $table->string('order_canceled_on')->nullable();
            $table->string('p_status')->default('pending');
            $table->string('p_status_Updated_By')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
