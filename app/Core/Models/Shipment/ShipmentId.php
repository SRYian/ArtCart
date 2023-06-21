<?php

namespace App\Core\Models\Shipment;

use Ramsey\Uuid\Uuid;

class ShipmentId
{
    private string $id;

    public function __construct(string $id)
    {
        if (Uuid::isValid($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("Invalid CartId format.");
        }
    }

    public function id(): string
    {
        return $this->id;
    }

    public function equals(ShipmentId $shipmentId): bool
    {
        return $this->id === $shipmentId->id;
    }
}
