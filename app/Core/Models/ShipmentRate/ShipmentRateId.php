<?php

namespace App\Core\Models\ShipmentRate;

use Ramsey\Uuid\Uuid;

class ShipmentRateId
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

    public function equals(ShipmentRateId $classId): bool
    {
        return $this->id === $classId->id;
    }
}
