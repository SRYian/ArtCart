<?php

namespace App\Core\Repository;

use App\Core\Models\ShipmentRate;
use App\Core\Models\Shipment;

interface CouponRepositoryInterface
{   
    public function byId(ShipmentRate $id): ?ShipmentRate;
}
