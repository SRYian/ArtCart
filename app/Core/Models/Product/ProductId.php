<?php

declare(strict_types=1);

namespace App\Core\Models\Product;

use Ramsey\Uuid\Uuid;

class ProductId
{
    private $id;

    public function __construct(string $id)
    {
        if (Uuid::isValid($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("Invalid ProductId format.");
        }
    }

    public function id(): string
    {
        return $this->id;
    }

    public function equals(ProductId $orderId): bool
    {
        return $this->id === $orderId->id;
    }
}
