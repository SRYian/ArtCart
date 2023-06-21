<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->uuid('cart_id')->primary();
            $table->string('coupon_code', 10)->nullable();
            $table->uuid('user_id');
            $table->integer('final_total')->nullable();
            
            $table->foreign('user_id', 'cart_buyer')->references('user_id')->on('buyer_account')->onUpdate('cascade');
            $table->foreign('coupon_code', 'coupon_code')->references('coupon_code')->on('coupon')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
