<?php

declare(strict_types=1);

namespace App\Core\Models\Coupon;

use App\Core\Models\User\UserId;
use DateTime;
use Carbon\Carbon;
use Exception;

class Coupon
{
    private CouponCode $couponCode;
    private UserId $userId;
    private float $discount;
    private int $maxUse;


    private int $uses;
    private DateTime $berlakuSampai;
    private DateTime $berlakuDari;
    /**
     * @return CouponCode
     */
    public function getCouponCode(): CouponCode
    {
        return $this->couponCode;
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId
    {
        return $this->userId;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return int
     */
    public function getMaxUse(): int
    {
        return $this->maxUse;
    }

    /**
     * @return int
     */
    public function getUses(): int
    {
        return $this->uses;
    }

    /**
     * @return DateTime
     */
    public function getBerlakuSampai(): DateTime
    {
        return $this->berlakuSampai;
    }

    /**
     * @return DateTime
     */
    public function getBerlakuDari(): DateTime
    {
        return $this->berlakuDari;
    }

    /**
     * @param CouponCode $couponCode
     * @param UserId $userId
     * @param float $discount
     * @param string $description
     * @param string $photoUrl
     */
    public function __construct(CouponCode $couponCode, UserId $userId, float $discount, int $maxUse, DateTime $berlakuSampai)
    {
        $this->couponCode = $couponCode;
        $this->userId = $userId;
        $this->discount = $discount;
        // $this->photoUrl = $photoUrl;
        $now = new DateTime();
        if (abs($now->diff($berlakuSampai)->days) > 2 && abs($now->diff($berlakuSampai)->days) < 14 && $maxUse > 1) {
            $this->maxUse = $maxUse;
            $this->uses = $maxUse;
            $this->berlakuDari = $now;
            $this->berlakuSampai = $berlakuSampai;
        } else {
            throw new Exception('kupon_tidak_valid');
        }
    }
    public function IsValid()
    {
        if (abs($this->berlakuDari->diff($this->berlakuSampai)->days) > 14 || $this->uses > $this->maxUse) {
            return false;
        }
        return true;
    }

    public function AddUse()
    {
        $this->uses += 1;
    }
}
