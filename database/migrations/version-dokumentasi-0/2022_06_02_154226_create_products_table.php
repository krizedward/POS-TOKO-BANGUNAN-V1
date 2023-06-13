<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('products', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unsignedBigInteger('detail_categories_id');
        //     $table->string('name_product',225);
        //     $table->integer('buy_price');
        //     $table->integer('sell_price');
        //     $table->string('images_product',225);
        //     $table->text('description');
        //     $table->integer('first_stock');
        //     $table->integer('last_stock');
        //     $table->timestamps();

        //     $table->foreign('detail_categories_id')
        //     ->references('id')->on('categories_details')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('products');
    }
}
