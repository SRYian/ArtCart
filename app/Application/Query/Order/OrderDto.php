<?php

namespace App\Application\Query\Order;

class OrderDto
{
    public function __construct(
        public string $name,
        public int $price,
        public int $quantity,
        public string $status,
        public int $finalTotal,
    ) {
    }
}
