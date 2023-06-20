<?php

namespace App\Application\Command\EditProduct;

class EditProductRequest
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
