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
            $table->id('id_product');
            $table->timestamps();
            $table->string('name_product');
            $table->string('description_product');
            $table->string('image_product');
            $table->foreignId("id_category")->refrences("id")->on("category")->onDelete('cascade'); 
            $table->foreignId("id_discount")->nullable()->references("id")->on("discount")->onDelete('cascade');
            $table->integer('stock_product');
            $table->integer('price_product');
           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
