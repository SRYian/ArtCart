<?php

declare(strict_types=1);

namespace App\Application\Command\AddCoupon;

use App\Core\Models\Coupon\Coupon;
use App\Core\Models\Coupon\CouponCode;
use App\Core\Models\Coupon\CouponId;
use App\Core\Models\Coupon\DescriptionCoupon;
use App\Core\Models\Coupon\Discount;
use App\Core\Models\Coupon\PhotoUrlCoupon;
use App\Core\Models\User\User;
use App\Core\Models\User\UserId;
use App\Core\Repository\CouponRepositoryInterface;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Throwable;
use function intval;

class AddCouponCommand
{
    public function __construct(
        private CouponRepositoryInterface $couponRepository
    ) {
    }

    public function execute(AddCouponRequest $request): void
    {
        // public string $couponCode,
        // public string $userId,
        // public float $discount,
        // public string $description,
        // public DateTime $berlakuSampai,
        $coupon = $this->couponRepository->byId(new CouponCode($request->couponCode));
        if ($coupon) {
            throw new InvalidArgumentException('coupon_sudah_ada');
        }
        DB::beginTransaction();
        try {
            $coupon = new Coupon(new CouponCode($request->couponCode), new UserId($request->userId), $request->discount, $request->maxUse, $request->berlakuSampai);
            $this->couponRepository->save($coupon);
        } catch (Throwable $exception) {
            DB::rollBack();
            throw $exception;
        }
        DB::commit();
    }
}
