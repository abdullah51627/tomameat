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
        Schema::dropIfExists("orders");
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->decimal('subtotal');
            $table->decimal('total');
            $table->foreignId('billing_address_id');
            $table->foreignId('shipping_address_id');
            $table->enum('status', ['paid', 'checkout', 'canceled', 'failed', 'expired']);
            $table->string('payment_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
