<?php

declare(strict_types=1);

namespace App\Core\Models\ShipmentRate;

use Ramsey\Uuid\Uuid;

class ShipmentRateId
{
    private $id;

    public function __construct(string $id)
    {
        if (Uuid::isValid($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("Invalid ShipmentRateId format.");
        }
    }

    public function id(): string
    {
        return $this->id;
    }

    public function equals(ShipmentRateId $shipmentRateId): bool
    {
        return $this->id === $shipmentRateId->id;
    }
}
