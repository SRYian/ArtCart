<?php

declare(strict_types=1);

namespace App\Application\Command\AddCoupon;

class AddCouponRequest
{
    public function __construct(
        public string $couponId,
        public int $userId,
        public float $discount,
        public string $description,
        public string $photourl,
    )
    { }
    
}
