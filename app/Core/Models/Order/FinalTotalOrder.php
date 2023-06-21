<?php

declare(strict_types=1);

namespace App\Core\Models\Order;


class FinalTotalOrder
{
    private int $final_total;

    public function __construct(int $final_total)
    {
        $this->final_total = $final_total;
    }

    public function getFinalTotal() : int
    {
        return $this->final_total;
    }
}
