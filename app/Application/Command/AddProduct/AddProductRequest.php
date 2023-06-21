<?php

namespace App\Application\Command\AddProduct;

class AddProductRequest
{
    public function __construct(
        public string $name,
        public int $price,
        public int $weight,
        public int $stock,
        public string $description,
        public string $photourl
    ) {
    }
}
