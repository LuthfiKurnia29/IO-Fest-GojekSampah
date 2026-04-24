<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_transaksi_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_barang_id')->constrained()->cascadeOnDelete();
            $table->foreignId('barang_marketplaces_id')->constrained('barang_marketplaces')->cascadeOnDelete();
            $table->integer('quantity');
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi_barangs');
    }
};
