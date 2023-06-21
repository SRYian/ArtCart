<?php

namespace App\Application\Command\EditProduct;

class EditProductRequest
{
    public function __construct(
        public string $id,
        public string $name,
        public int $price,
        public int $weight,
        public int $stock,
        public string $description,
        public string $photourl

    ) {
    }
}
