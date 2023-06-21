<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Coupon\Coupon;
use App\Core\Models\Coupon\CouponCode;
use App\Core\Repository\CouponRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CouponRepository implements CouponRepositoryInterface
{

    public function byId(CouponCode $code): ?Coupon
    {

        $row = DB::table('coupon')->where('coupon_code', $code->getCode())->first();
        if (!$row) return null;

        return new Coupon(
            $code,
            $row->user_id,
            $row->discount,
            $row->description,
            $row->photourl
        );
    }

    public function save(Coupon $coupon): void
    {
        $payload = $this->constructPayload($coupon);
        $payload['coupon_code'] = $coupon->getCouponCode()->getCode();
        DB::table('coupon')->insert($payload);
    }

    public function update(Coupon $coupon): void
    {
        $payload = $this->constructPayload($coupon);
        DB::table('coupon')
            ->where('coupon_code', $coupon->getCouponCode()->getCode())
            ->update($payload);
    }

    private function constructPayload(Coupon $coupon)
    {
        // TODO: sesuiin sama Db
        return [
            "user_id" => $coupon->getUserId()->id(),
            "discount" => $coupon->getDiscount(),
            "uses" => $coupon->getUses(),
            "max_use" => $coupon->getMaxUse(),
            "berlaku_sampai" => $coupon->getBerlakuSampai(),
        ];
    }
}
