<?php

namespace App\Core\Repository;

use App\Core\Models\Coupon;
use App\Core\Models\CouponId;

interface CouponRepositoryInterface
{   
    public function byId(CouponId $id): ?Coupon;
    
    public function save(Coupon $coupon): void;
    
    public function update(Coupon $coupon): void;
}
