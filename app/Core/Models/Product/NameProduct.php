<?php

declare(strict_types=1);

namespace App\Core\Models\Product;


class NameProduct
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getNameProduct() : string
    {
        return $this->name;
    }
}
