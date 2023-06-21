<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentRateRateShipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shipment_rate', function (Blueprint $table) {
            $table->foreign('shipment_id', 'rate_shipment')->references('rate_id')->on('shipment_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shipment_rate', function(Blueprint $table){
            $table->dropForeign('rate_shipment');
        });
    }
}
