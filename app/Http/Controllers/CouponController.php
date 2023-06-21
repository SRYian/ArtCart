<?php

namespace App\Http\Controllers;

use App\Application\Command\AddCoupon\AddCouponCommand;
use App\Application\Command\AddCoupon\AddCouponRequest;
use App\Core\Models\User\UserId;
use App\Core\Repository\CouponRepositoryInterface;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Exception;
use DateTime;

class CouponController extends Controller
{
    public function __construct(
        private CouponRepositoryInterface $couponRepositoryInterface
    ) {
    }
    public function Add()
    {
        // return these params

        // TODO:change to command or something
        return view('seller.add-coupon');
    }
    public function AddAction(Request $request, AddCouponCommand $command)
    {

        // public string $couponCode,
        // public string $userId,
        // public float $discount,
        // public int $maxUse,
        // public DateTime $berlakuSampai,
        // return these params
        // TODO: edit the user id
        $userId = '3cdab866-1015-11ee-be56-0242ac120002';
        $code = $request->input('couponCode');
        $maxUse = $request->input('maxUse');
        $priceCut = $request->input('priceCut');
        $validDate = new DateTime($request->input('valid_date'));
        $addrequest = new AddCouponRequest($code, $userId, $priceCut, $maxUse, $validDate);
        try {
            $command->execute($addrequest);
        } catch (Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }
        // TODO:change to command or something
        return response()->redirectTo(route('seller_product'))
            ->with('success', 'berhasil');
    }
}
