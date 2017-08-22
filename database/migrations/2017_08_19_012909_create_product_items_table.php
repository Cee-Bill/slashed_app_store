<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productId');
            // $table->foreign('productId')->references('id')->on('products');
            $table->string('name');
            $table->string('colour');
            $table->string('sizeLen');
            $table->string('description')->nullable();
            $table->string('price');
            $table->integer('quantity');
            $table->string('image');
            $table->string('image2');
            $table->string('image3')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_items');
    }
}
