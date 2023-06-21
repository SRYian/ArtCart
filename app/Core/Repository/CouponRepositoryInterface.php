<?php

namespace App\Core\Repository;

use App\Core\Models\Coupon\Coupon;
use App\Core\Models\Coupon\CouponCode;

interface CouponRepositoryInterface
{
    public function byId(CouponCode $id): ?Coupon;

    public function save(Coupon $coupon): void;

    public function update(Coupon $coupon): void;
}
