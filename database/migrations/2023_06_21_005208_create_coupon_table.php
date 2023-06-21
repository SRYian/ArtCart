<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
            $table->string('coupon_code', 10)->primary();
            $table->char('user_id', 13);
            $table->float('discount');
            $table->text('description');
            $table->string('photourl', 256);
            
            $table->foreign('user_id', 'coupon_seller')->references('user_id')->on('seller_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon');
    }
}
