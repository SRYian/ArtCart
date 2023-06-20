<?php

namespace App\Core\Models\CartDetails;

use Ramsey\Uuid\Uuid;

class CartDetailsId
{
    private string $id;

    public function __construct(string $id)
    {
        if (Uuid::isValid($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("Invalid CartDetailsId format.");
        }
    }

    public function id(): string
    {
        return $this->id;
    }

    public function equals(CartDetailsId $cart_details_id): bool
    {
        return $this->id === $cart_details_id->id;
    }
}
