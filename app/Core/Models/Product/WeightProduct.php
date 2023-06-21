<?php

declare(strict_types=1);

namespace App\Core\Models\Product;


class WeightProduct
{
    private int $weight;

    public function __construct(int $weight)
    {
        $this->weight = $weight;
    }

    public function getWeight() : int
    {
        return $this->weight;
    }
}
