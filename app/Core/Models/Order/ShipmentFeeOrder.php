<?php

declare(strict_types=1);

namespace App\Core\Models\Order;


class ShipmentFeeOrder
{
    private int $shipment_fee;

    public function __construct(int $shipment_fee)
    {
        $this->shipment_fee = $shipment_fee;
    }

    public function getShipmentFee() : int
    {
        return $this->shipment_fee;
    }
}
