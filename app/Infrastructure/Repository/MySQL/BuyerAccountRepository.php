<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\User\BuyerAccount\BuyerAccount;
use App\Core\Models\User\UserId;
use App\Core\Repository\BuyerAccountRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BuyerAccountRepository implements BuyerAccountRepositoryInterface
{

    public function byId(UserId $userId): ?BuyerAccount
    {
        $row = DB::table('order')->where('order_id', $userId->id())->first();
        if (!$row) return null;
        return new BuyerAccount($userId, $row->shipping_address, $row->phone, );


    }
}
