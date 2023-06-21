<?php

declare(strict_types=1);

namespace App\Core\Models\Coupon;


class DescriptionCoupon
{
    private string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function getDescriptionCoupon() : string
    {
        return $this->description;
    }
}
