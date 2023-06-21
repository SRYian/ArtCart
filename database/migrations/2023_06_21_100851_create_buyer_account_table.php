<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_account', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->uuid('curr_cart_id');
            $table->string('shipping_address', 1000);
            $table->string('phone', 20);
            
            $table->foreign('curr_cart_id', 'buyer_currcart')->references('cart_id')->on('cart')->onUpdate('cascade');
            $table->foreign('user_id', 'buyer_user')->references('user_id')->on('user')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyer_account');
    }
}
