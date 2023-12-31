<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model KategoriSuplier -c
     * Happy Coding :)
     */
    public function up(): void
    {
        Schema::create('kategori_suplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_id')->nullable(); // untuk kode [KP]
            $table->string('kode_nomor')->nullable(); // untuk nomor [str_pad(mt_rand(1,99999), 5, '0', STR_PAD_LEFT);]
            $table->string('nama')->nullable(); // untuk nama kategori
            $table->string('slug')->nullable(); // untuk nama url 
            $table->text('deskripsi')->nullable(); // untuk penjelasan detail kategori
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_suplier');
    }
};
