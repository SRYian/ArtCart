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
            $table->uuid('order_id')->primary();
            $table->uuid('cart_id');
            $table->uuid('rate_id');
            $table->uuid('payment_id');
            $table->char('coupon_code', 13)->nullable();
            $table->uuid('buy_user_id');
            $table->integer('final_total');
            $table->integer('shipment_fee');
            $table->string('origin', 50);
            $table->string('destination', 50);
            $table->uuid('sell_user_id');
            
            $table->foreign('buy_user_id', 'orders_buyer')->references('user_id')->on('buyer_account')->onUpdate('cascade');
            $table->foreign('coupon_code', 'orders_coupon')->references('coupon_code')->on('coupon')->onUpdate('cascade');
            $table->foreign('payment_id', 'orders_payment')->references('payment_id')->on('payment')->onUpdate('cascade');
            $table->foreign('rate_id', 'orders_rate')->references('rate_id')->on('shipment_rate')->onUpdate('cascade');
            $table->foreign('sell_user_id', 'orders_seller')->references('user_id')->on('seller_account')->onUpdate('cascade');
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
