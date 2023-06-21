<?php

namespace App\Infrastructure\Query\MySQL;

use App\Application\Query\Seller\SellerAccountDto;
use App\Core\Models\User\UserId;
use Illuminate\Support\Facades\DB;

class SellerAccountQuery implements \App\Application\Query\Seller\SellerAccountQueryInterface
{

    public function execute(UserId $userId): ?SellerAccountDto
    {
        $sql = "SELECT s.user_id, s.shop_name, s.shop_address, s.phone
                FROM seller_account s
                WHERE s.user_id = :id_user";

        $result = DB::select($sql, [
            'id_user' => $userId->id()
        ]);

        if ($result) {
            return new SellerAccountDto(
                user_id: $result[0]->user_id,
                shop_name: $result[0]->shop_name,
                shop_address: $result[0]->shop_address,
                phone: $result[0]->phone
            );
        }
        return null;

    }
}
