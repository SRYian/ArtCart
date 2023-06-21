<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->char('product_id', 13)->primary();
            $table->char('user_id', 13);
            $table->char('category_id', 13);
            $table->string('name', 64);
            $table->integer('price');
            $table->float('weight');
            $table->text('description');
            $table->string('photourl', 256);
            
            $table->foreign('category_id', 'products_category')->references('category_id')->on('category');
            $table->foreign('user_id', 'products_seller')->references('user_id')->on('seller_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
