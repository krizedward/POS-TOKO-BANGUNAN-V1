<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_storages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_masters_id');
            $table->integer('first_stock');
            $table->integer('last_stock');
            $table->timestamps();

            $table->foreign('product_masters_id')
            ->references('id')->on('product_masters')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_storages');
    }
}
