<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model KategoriProduk -c
     * Happy Coding :)
     */
    public function up(): void
    {
        Schema::create('kategori_produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_id')->nullable(); // untuk kode [GT]
            $table->string('nama')->nullable(); // untuk nama kategori
            $table->string('slug')->nullable(); // untuk nama url 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_produk');
    }
};
