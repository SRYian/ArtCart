<?php

namespace App\Application\Command\AddProduct;

class AddProductRequest
{
    public function __construct(
        int $finalTotal,
        int $shipmentFee,
        string $origin,
        string $destination,
        string $status
    ) {
    }
}
