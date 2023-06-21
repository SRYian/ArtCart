<?php

declare(strict_types=1);

namespace App\Core\Models\Coupon;

use App\Core\Models\User\UserId;

class Coupon
{
    private CouponCode $couponCode;
    private UserId $userId;
    private float $discount;
    private string $description;
    private string $photoUrl;

    /**
     * @param CouponCode $couponCode
     * @param UserId $userId
     * @param float $discount
     * @param string $description
     * @param string $photoUrl
     */
    public function __construct(CouponCode $couponCode, UserId $userId, float $discount, string $description, string $photoUrl)
    {
        $this->couponCode = $couponCode;
        $this->userId = $userId;
        $this->discount = $discount;
        $this->description = $description;
        $this->photoUrl = $photoUrl;
    }


}
