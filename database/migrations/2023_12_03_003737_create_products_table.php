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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category")->references("id")->on("categories");
            $table->integer('priority');
            $table->string('name');
            $table->string('description');
            $table->string('url');
            $table->integer('rating')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('status')->default(1);
            $table->float('delivery_charges')->nullable();
            $table->string('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("products",function(Blueprint $table){
            $table->dropForeign("product_images_product_id_foreign");
        });
        Schema::dropIfExists('products');
    }
};
