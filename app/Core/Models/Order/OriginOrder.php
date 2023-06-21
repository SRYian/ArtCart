<?php

declare(strict_types=1);

namespace App\Core\Models\Order;


class OriginOrder
{
    private string $origin;

    public function __construct(string $origin)
    {
        $this->origin = $origin;
    }

    public function getOrigin() : string
    {
        return $this->origin;
    }
}
