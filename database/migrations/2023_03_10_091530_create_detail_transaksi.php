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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id("id_detail_transaksi");
            $table->foreignId("id_product")->refrences("id")->on("product")->onDelete('cascade');
            $table->foreignId("id_header_transaksi")->references("id")->on("header_transaksi")->onDelete('cascade');
            $table->integer("jumlah");
            $table->integer("pembayaran");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
