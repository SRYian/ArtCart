<?php

declare(strict_types=1);

namespace App\Core\Models\Product;


class PriceProduct
{
    private int $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice() : int
    {
        return $this->price;
    }
}
