<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\ShipmentRate\ShipmentRate;
use App\Core\Models\ShipmentRate\ShipmentRateId;
use App\Core\Repository\ShipmentRateRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ShipmentRateRepository implements ShipmentRateRepositoryInterface
{

    public function byId(ShipmentRateId $id): ?ShipmentRate
    {

        $row = DB::table('shipment_rate')->where('rate_id', $id->id())->first();
        if(!$row) return null;

        return new ShipmentRate(
            $id,
            $row->shipment_id,
            $row->city1,
            $row->city2,            
            $row->pricekg,
        );
    }
}
