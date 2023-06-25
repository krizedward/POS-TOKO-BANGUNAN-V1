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
            // $table->id();
            // $table->string('nama_produk');
            // $table->text('deskripsi');
            // $table->decimal('harga', 8, 2);
            // $table->integer('stok');
            // $table->integer('stok_minimum');
            // $table->string('kategori');
            // $table->string('supplier');
            // $table->date('tanggal_pembelian_terakhir');
            // $table->date('tanggal_kadaluarsa')->nullable();
            // $table->bigIncrements('id');
            // $table->string('kode_id')->nullable(); // untuk kode [KT]
            // $table->string('kode_nomor')->nullable(); // untuk nomor [str_pad(mt_rand(1,99999), 5, '0', STR_PAD_LEFT);]
            // $table->string('nama')->nullable();
            // $table->integer('modal')->nullable();
            // $table->integer('jumlah')->nullable();
            // $table->date('tanggal_masuk')->nullable();
            // $table->string('slug')->nullable(); // untuk nama url
            $table->bigIncrements('id');
            $table->string('kode_id')->nullable(); // untuk kode [KT] // berdasarkan singkatan dari kategori
            $table->string('kode_nomor')->nullable(); // untuk nomor [str_pad(mt_rand(1,99999), 5, '0', STR_PAD_LEFT);]
            $table->string('nama')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('slug')->nullable(); // untuk nama url
            // foriegn key
            $table->unsignedBigInteger('kategori_id')->nullable();
            // $table->unsignedBigInteger('harga_id')->nullable();
            
            $table->foreign('kategori_id')
            ->references('id')->on('kategori_produk')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            // $table->foreign('harga_id')
            // ->references('id')->on('produk_harga_umum')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            $table->timestamps();
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
