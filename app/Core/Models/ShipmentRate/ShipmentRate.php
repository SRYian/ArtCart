<?php

declare(strict_types=1);

namespace App\Core\Models\ShipmentRate;

use App\Core\Models\Shipment\Shipment;
use App\Core\Models\Shipment\ShipmentId;

class ShipmentRate
{

    private ShipmentRateId $rate_id;
    private int $shipment_id;
    private string $city1;
    private string $city2;
    private int $pricekg;

    public function __construct(
        ShipmentRateId $rate_id,
        int $shipment_id,
        string $city1,
        string $city2,
        int $pricekg,
    ) {
        $this->rate_id = $rate_id;
        $this->shipment_id = $shipment_id;
        $this->city1 = $city1;
        $this->city2 = $city2;
        $this->pricekg = $pricekg;
    }

    public function getId(): ShipmentRateId
    {
        return $this->rate_id;
    }

    public function getShipmentId(): int
    {
        return $this->shipment_id;
    }

    public function getCity1(): string
    {
        return $this->city1;
    }

    public function getCity2(): string
    {
        return $this->city2;
    }

    public function getPriceKg(): int
    {
        return $this->pricekg;
    }
}
