<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->char('cart_details_id', 13)->primary();
            $table->integer('quantity')->default(1);
            $table->integer('price');
            $table->char('user_id', 13);
            $table->char('product_id', 13);
            $table->char('order_id', 13);
            $table->char('cart_id', 13);
            
            $table->foreign('cart_id', 'cart_cartdetails')->references('cart_id')->on('cart');
            $table->foreign('product_id', 'cartdetails_product')->references('product_id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_details');
    }
}
