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
            $table->char('cart_id', 13)->primary();
            $table->string('coupon_code', 10)->nullable();
            $table->char('user_id', 13);
            $table->integer('final_total')->nullable();
            
            $table->foreign('user_id', 'cart_buyer')->references('user_id')->on('buyer_account');
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
