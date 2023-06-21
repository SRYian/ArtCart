<?php

namespace App\Core\Repository;


use App\Core\Models\ShipmentRate;
use App\Core\Models\ShipmentRateId;

interface ShipmentRateRepositoryInterface
{   
    public function byId(ShipmentRateId $id): ?ShipmentRate;
}
