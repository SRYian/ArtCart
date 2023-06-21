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
            $table->char('user_id', 13)->primary();
            $table->char('curr_cart_id', 13);
            $table->string('shipping_address', 1000);
            $table->string('phone', 20);
            
            $table->foreign('user_id', 'user_buyer')->references('user_id')->on('user');
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
