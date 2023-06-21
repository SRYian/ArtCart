<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;
use Ramsey\Uuid\Uuid;
use Exception;

class DeliveryController extends Controller
{
    public function ViewAll()
    {
        // return these params

        // TODO:change to command or something
        return view('cart.delivery', [
            'deliveryPrice' => 10000000,
            'couponCut' => 100000,
            'total' => 3249848234982,
        ]);
    }
    public function SubmitAction(Request $request)
    {
        // return these params
        $city = $request->input('city');
        $courier = $request->input('courier');
        // TODO:change to command or something
        return response()->redirectTo(route('buyer_payment', ['id' => 100]))
            ->with('success', 'berhasil');
    }
}
