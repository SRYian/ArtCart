<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_account', function (Blueprint $table) {
            $table->char('user_id', 13)->primary();
            $table->string('shop_name', 128);
            $table->string('shop_address', 1000);
            $table->string('phone', 20);
            
            $table->foreign('user_id', 'seller_user')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_account');
    }
}
