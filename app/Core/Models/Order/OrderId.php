<?php

declare(strict_types=1);

namespace App\Core\Models\Order;

use Ramsey\Uuid\Uuid;

class OrderId
{
    private $id;

    public function __construct(string $id)
    {
        if (Uuid::isValid($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("Invalid OrderId format.");
        }
    }

    public function id(): string
    {
        return $this->id;
    }

    public function equals(OrderId $orderId): bool
    {
        return $this->id === $orderId->id;
    }
}
