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
            $table->uuid('cart_details_id')->primary();
            $table->integer('quantity')->default(1);
            $table->integer('price');
            $table->uuid('user_id');
            $table->uuid('product_id');
            $table->uuid('order_id');
            $table->uuid('cart_id');
            
            $table->foreign('user_id', 'cartdetails_buyer')->references('user_id')->on('buyer_account')->onUpdate('cascade');
            $table->foreign('cart_id', 'cartdetails_cart')->references('cart_id')->on('cart')->onUpdate('cascade');
            $table->foreign('order_id', 'cartdetails_orders')->references('order_id')->on('orders')->onUpdate('cascade');
            $table->foreign('product_id', 'cartdetails_product')->references('product_id')->on('product')->onUpdate('cascade');
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
