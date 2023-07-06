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
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_id')->nullable(); // untuk kode [KT] // berdasarkan singkatan dari kategori
            $table->string('kode_nomor')->nullable(); // untuk nomor [str_pad(mt_rand(1,99999), 5, '0', STR_PAD_LEFT);]
            $table->string('nama')->nullable();
            $table->string('slug')->nullable(); // untuk nama url
            //custom
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->unsignedBigInteger('satuan_id')->nullable();
            $table->timestamps();

            // relasi
            $table->foreign('kategori_id')
            ->references('id')->on('kategori_produk')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('satuan_id')
            ->references('id')->on('produk_satuan')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
