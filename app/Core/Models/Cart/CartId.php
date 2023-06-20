<?php

namespace App\Core\Models\Cart;

use Ramsey\Uuid\Uuid;

class CartId
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

    public function equals(OrderId $orderId): bool
    {
        return $this->id === $orderId->id;
    }
}
