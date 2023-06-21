<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Coupon\Coupon;
use App\Core\Models\Coupon\CouponId;
use App\Core\Repository\CouponRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CouponRepository implements CouponRepositoryInterface
{

    public function byId(CouponId $id): ?Coupon
    {

        $row = DB::table('coupon')->where('coupon_code', $id->id())->first();
        if(!$row) return null;

        return new Coupon(
            $id,
            $row->user_id,
            $row->discount,
            $row->description,
            $row->photourl
        );
    }

    public function save(Coupon $coupon): void
    {
        $payload = $this->constructPayload($coupon);
        DB::table('coupon')->insert($payload);
    }

    public function update(Coupon $coupon): void
    {
        $payload = $this->constructPayload($coupon);
        DB::table('coupon')
            ->where('coupon_code', $coupon->getCouponCode())
            ->update($payload);
    }

    private function constructPayload(Coupon $coupon)
    {
        return [
            "coupon_code" => $coupon->getCouponCode(),
            "user_id" => $coupon->getUserId(),
            "discount" => $coupon->getDiscount(),
            "description" => $coupon->getDescription(),
            "photourl" => $coupon->getPhotoUrl(),
        ];
    }
}
