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
            $table->uuid('user_id');
            $table->float('discount');
            //$table->text('description');
            //$table->string('photourl', 256);
            $table->int('max_use');
            $table->datetime('valid_date');
            
            $table->foreign('user_id', 'coupon_seller')->references('user_id')->on('seller_account')->onUpdate('cascade');
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
