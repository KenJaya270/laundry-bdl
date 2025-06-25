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
            $table->date('tanggal_order');
            $table->date('tanggal_pengiriman');
            $table->enum('status', ['belum dikirim', 'sudah dikirim', 'sedang proses'])->default('belum dikirim');
            $table->float('berat_keseluruhan')->default(123.45);
            $table->
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
