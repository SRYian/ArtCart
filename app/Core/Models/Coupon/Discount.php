<?php

declare(strict_types=1);

namespace App\Core\Models\Coupon;


class Discount
{
    private float $discount;

    public function __construct(float $discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount() : float
    {
        return $this->discount;
    }
}
