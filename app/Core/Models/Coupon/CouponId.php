<?php

declare(strict_types=1);

namespace App\Core\Models\Coupon;

use Ramsey\Uuid\Uuid;

class CouponId
{
    private string $id;

    public function __construct(string $id)
    {
        if (Uuid::isValid($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("Invalid CouponId format.");
        }
    }

    public function id() : string
    {
        return $this->id;
    }

    public function equals(CouponId $couponId) : bool
    {
        return $this->id === $couponId->id;
    }
}
