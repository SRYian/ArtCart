<?php

namespace App\Core\Repository;

use App\Core\Models\ShipmentRate\ShipmentRate;

interface ShipmentRateRepositoryInterface
{
    public function byId(ShipmentRate $id): ?ShipmentRate;
}
