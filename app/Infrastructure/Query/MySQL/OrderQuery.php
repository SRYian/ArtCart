<?php

namespace App\Infrastructure\Query\MySQL;

use App\Application\Query\Order\OrderDto;
use App\Application\Query\Order\OrderQueryInterface;
use App\Application\Query\Seller\SellerAccountDto;
use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Models\Order\Order;
use App\Core\Models\User\UserId;
use Illuminate\Support\Facades\DB;

class OrderQuery implements OrderQueryInterface
{

    public function execute(UserId $userId): ?array
    {
        $sql = "SELECT p.name, cd.price, cd.quantity, o.final_total
        FROM cart_details cd
        INNER JOIN orders o ON cd.user_id=o.sell_user_id
        INNER JOIN product p ON cd.user_id=p.user_id
        WHERE cd.user_id=:id_user";

        $row = DB::select($sql, [
            //'id_user' => $userId->id()
            'id_user' => $userId->id()
        ]);



        $orderList = array();

        foreach ($row as $order) {
            $orderList[] = new OrderDto(
                $order->name,
                $order->price,
                $order->quantity,
                $order->status,
                $order->final_total
            );
        }

        return $orderList;
    }
}
