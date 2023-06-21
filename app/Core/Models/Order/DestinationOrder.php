<?php

declare(strict_types=1);

namespace App\Core\Models\Order;


class DestinationOrder
{
    private string $destination;

    public function __construct(string $destination)
    {
        $this->destination = $destination;
    }

    public function getDestination() : string
    {
        return $this->destination;
    }
}
