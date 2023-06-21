<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerAccountBuyerCurrcartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buyer_account', function (Blueprint $table) {
            $table->foreign('curr_cart_id', 'buyer_currcart')->references('cart_id')->on('cart')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buyer_account', function(Blueprint $table){
            $table->dropForeign('buyer_currcart');
        });
    }
}
