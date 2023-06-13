<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_details_id');
            $table->string('name',225);
            $table->integer('buy_price');
            $table->integer('sell_price');
            $table->string('images',225);
            $table->text('description');
            $table->timestamps();

            $table->foreign('category_details_id')
            ->references('id')->on('category_details')
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
        Schema::dropIfExists('product_masters');
    }
}
