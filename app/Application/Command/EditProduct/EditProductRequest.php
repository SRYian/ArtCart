<?php

namespace App\Application\Command\EditProduct;

class EditProductRequest
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
