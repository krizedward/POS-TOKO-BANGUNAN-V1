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
        Schema::create('produk_harga_umum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produk_id')->nullable();
            $table->unsignedBigInteger('stok_id')->nullable();
            $table->integer('harga_modal')->nullable();
            $table->integer('harga_jual')->nullable();
            $table->timestamps();

            $table->foreign('stok_id')
            ->references('id')->on('produk_stok')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('produk_id')
            ->references('id')->on('produk')
            ->onUpdate('cascade')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_harga_umum');
    }
};
