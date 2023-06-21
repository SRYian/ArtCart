<?php

declare(strict_types=1);

namespace App\Application\Command\AddCoupon;

use App\Core\Models\Coupon\Coupon;
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
    ) { }

    public function execute(AddCouponRequest $request): void
    {
        DB::beginTransaction();
        try {
            $coupon = addCoupon(
                new Discount($request->discount),
                new DescriptionCoupon($request->description),
                new PhotoUrlCoupon($request->photourl)
            );
            $this->couponRepository->save($coupon);
        } catch (Throwable $exception) {
            DB::rollBack();
            throw $exception;
        }
        DB::commit();
    }
}
