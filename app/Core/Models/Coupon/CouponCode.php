<?php

namespace App\Core\Models\Coupon;

class CouponCode
{
    private string $code;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function __construct(?string $code)
    {
        $codeFinal = '';
        if($code == null || $code == '') {
            $codeFinal = $this->generateCoupon(10);
        } else {
            $codeFinal = $code;
        }
        $this->code = $codeFinal;
    }


    function generateCoupon($length): string
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
