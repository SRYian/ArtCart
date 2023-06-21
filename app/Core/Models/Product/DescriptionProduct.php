<?php

declare(strict_types=1);

namespace App\Core\Models\Product;


class DescriptionProduct
{
    private string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function getDescriptionProduct() : string
    {
        return $this->description;
    }
}
