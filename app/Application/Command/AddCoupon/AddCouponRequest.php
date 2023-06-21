<?php

declare(strict_types=1);

namespace App\Application\Command\AddCoupon;

use DateTime;

class AddCouponRequest
{
    public function __construct(
        public string $couponCode,
        public string $userId,
        public float $discount,
        public int $maxUse,
        public DateTime $berlakuSampai,
    ) {
    }
}
