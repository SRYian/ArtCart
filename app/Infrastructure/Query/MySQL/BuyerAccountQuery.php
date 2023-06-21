<?php

namespace App\Infrastructure\Query\MySQL;

use App\Application\Query\Buyer\BuyerAccountDto;
use App\Application\Query\Buyer\BuyerAccountQueryInterface;
use App\Application\Query\Seller\SellerAccountDto;
use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Models\User\UserId;
use Illuminate\Support\Facades\DB;

class BuyerAccountQuery implements BuyerAccountQueryInterface
{

    public function execute(UserId $userId): ?BuyerAccountDto
    {
        $sql = "SELECT b.user_id, b.curr_cart_id, b.shipping_address, b.phone
                FROM artcart.buyer_account b
                WHERE b.user_id = :id_user";

        $result = DB::select($sql, [
//            'id_user' => $userId->id()
            'id_user' => $userId->id()
        ]);

        if ($result) {
            return new BuyerAccountDto(
                user_id: $result[0]->user_id,
                curr_cart_id: $result[0]->curr_cart_id,
                shipping_address: $result[0]->shipping_address,
                phone: $result[0]->phone,
            );
        }
        return null;

    }
}
