<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_rate', function (Blueprint $table) {
            $table->uuid('rate_id')->primary();
            $table->uuid('shipment_id');
            $table->string('city1', 50);
            $table->string('city2', 50);
            $table->integer('pricekg');
            
            $table->foreign('shipment_id', 'rate_shipment')->references('shipment_id')->on('shipment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipment_rate');
    }
}
