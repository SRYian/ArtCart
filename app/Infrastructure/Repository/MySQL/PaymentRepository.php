<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Payment\Payment;
use App\Core\Models\Payment\PaymentId;
use App\Core\Repository\PaymentRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PaymentRepository implements PaymentRepositoryInterface
{

    public function byId(PaymentId $id): ?Payment
    {

        $row = DB::table('payment')->where('payment_id', $id->id())->first();
        if(!$row) return null;

        return new Payment(
            $id,
            $row->name
        );
    }
}
