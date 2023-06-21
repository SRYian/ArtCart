<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;
use Ramsey\Uuid\Uuid;
use Exception;

class CouponController extends Controller
{
    public function ViewAll()
    {
        // return these params

        // TODO:change to command or something
        return view('seller.add-coupon');
    }
    public function SubmitAction(Request $request)
    {
        // return these params
        $name = $request->input('name');
        $maxUse = $request->input('maxUse');
        $priceCut = $request->input('priceCut');
        $validDate = $request->input('validDate');
        // TODO:change to command or something
        return response()->redirectTo(route('seller_product', ['id' => 100]))
            ->with('success', 'berhasil');
    }
}
