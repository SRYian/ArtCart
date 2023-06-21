<?php

declare(strict_types=1);

namespace App\Core\Models\ShipmentRate;

use App\Core\Models\Shipment\Shipment;
use App\Core\Models\Shipment\ShipmentId;

class ShipmentRate
{
    private ShipmentRateId $shipmentRateId;
    private ShipmentId $shipmentId;
    private string $city1;
    private string $city2;
    private int $priceKg;

    /**
     * @param ShipmentRateId $shipmentRateId
     * @param ShipmentId $shipmentId
     * @param string $city1
     * @param string $city2
     * @param int $priceKg
     */
    public function __construct(ShipmentRateId $shipmentRateId, ShipmentId $shipmentId, string $city1, string $city2, int $priceKg)
    {
        $this->shipmentRateId = $shipmentRateId;
        $this->shipmentId = $shipmentId;
        $this->city1 = $city1;
        $this->city2 = $city2;
        $this->priceKg = $priceKg;
    }


}
