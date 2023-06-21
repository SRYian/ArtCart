<?php

namespace App\Core\Models\Shipment;

class Shipment
{
    private ShipmentId $shipmentId;
    private string $name;
    private int $price;

    /**
     * @param ShipmentId $shipmentId
     * @param string $name
     * @param int $price
     */
    public function __construct(ShipmentId $shipmentId, string $name, int $price)
    {
        $this->shipmentId = $shipmentId;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return ShipmentId
     */
    public function getShipmentId(): ShipmentId
    {
        return $this->shipmentId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }


}
