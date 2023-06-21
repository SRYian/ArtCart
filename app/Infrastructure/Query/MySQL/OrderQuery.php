<?php

namespace App\Infrastructure\Query\MySQL;

use App\Application\Query\Seller\SellerAccountDto;
use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Models\User\UserId;
use Illuminate\Support\Facades\DB;

class OrderQuery implements SellerAccountQueryInterface
{

    public function execute(UserId $userId): ?SellerAccountDto
    {
        $sql = "SELECT p.name, cd.price, cd.quantity, o.final_total
        FROM cart_details cd
        INNER JOIN orders o ON cd.user_id=o.sell_user_id
        INNER JOIN product p ON cd.user_id=p.user_id
        WHERE cd.user_id=:id_user";

        $result = DB::select($sql, [
            //            'id_user' => $userId->id()
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
