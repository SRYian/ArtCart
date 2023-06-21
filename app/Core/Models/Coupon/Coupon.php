<?php

declare(strict_types=1);

namespace App\Core\Models\Coupon;

use App\Core\Models\User\UserId;

use App\Core\Models\Coupon\CouponId;

class Coupon
{
    private CouponId $coupon_code;
    private UserId $user_id;
    private float $discount;
    private string $description;
    private string $photourl;

    public function __construct(
        CouponId $coupon_code,
        UserId $user_id,
        float $discount,
        string $description,
        string $photourl,
    ){
        $this->coupon_code = $coupon_code;
        $this->user_id = $user_id;
        $this->discount = $discount;
        $this->description = $description;
        $this->photourl = $photourl;
    }

    public function getCouponCode(): CouponId
    {
        return $this->coupon_code;
    }

    public function getUserId(): UserId
    {
        return $this->user_id;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhotoUrl(): string
    {
        return $this->photourl;
    }

    public function addCoupon() 
    {
        // todo
    }

}
