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
            $table->char('rate_id', 13)->primary();
            $table->char('shipment_id', 13);
            $table->string('city1', 50);
            $table->string('city2', 50);
            $table->integer('pricekg');
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
