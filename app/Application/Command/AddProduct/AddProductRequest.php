<?php

namespace App\Application\Command\AddProduct;

class AddProductRequest
{
    public function __construct(
        string $name,
        int $price,
        int $weight,
        int $stock,
        string $description
    ) {
    }
}
