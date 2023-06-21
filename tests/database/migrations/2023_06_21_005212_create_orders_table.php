<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->char('order_id', 13)->primary();
            $table->char('cart_id', 13);
            $table->char('rate_id', 13);
            $table->char('payment_id', 13)->nullable();
            $table->char('coupon_code', 13)->nullable();
            $table->char('buy_user_id', 13);
            $table->integer('final_total');
            $table->integer('shipment_fee');
            $table->string('origin', 50);
            $table->string('destination', 50);
            $table->char('sell_user_id', 13);
            
            $table->foreign('buy_user_id', 'orders_buyer')->references('user_id')->on('buyer_account');
            $table->foreign('cart_id', 'orders_cart')->references('cart_id')->on('cart');
            $table->foreign('coupon_code', 'orders_coupon')->references('coupon_code')->on('coupon');
            $table->foreign('payment_id', 'orders_payment')->references('payment_id')->on('payment');
            $table->foreign('rate_id', 'orders_rate')->references('rate_id')->on('shipment_rate');
            $table->foreign('sell_user_id', 'orders_seller')->references('user_id')->on('seller_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
