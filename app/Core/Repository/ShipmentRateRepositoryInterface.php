<?php

namespace App\Core\Repository;

use App\Core\Models\ShipmentRate;
use App\Core\Models\Shipment;

interface ShipmentRateRepositoryInterface
{   
    public function byId(ShipmentRate $id): ?ShipmentRate;
}
