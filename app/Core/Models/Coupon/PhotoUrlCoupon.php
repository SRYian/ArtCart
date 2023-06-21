<?php

declare(strict_types=1);

namespace App\Core\Models\Coupon;


class PhotoUrlCoupon
{
    private string $photourl;

    public function __construct(string $photourl)
    {
        $this->photourl = $photourl;
    }

    public function getPhotoUrlCoupon() : string
    {
        return $this->photourl;
    }
}
