<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Cart\Cart;
use App\Core\Models\Cart\CartId;
use App\Core\Models\User\UserId;
use App\Core\Repository\CartDetailsRepositoryInterface;
use App\Core\Repository\CartRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CartRepository implements CartRepositoryInterface
{

    public function byId(CartId $cartId): ?Cart
    {
        $row = DB::table('cart')->where('cart_id', $cartId->id())->first();
        if(!$row) return null;

        return new Cart(
            new CartId($row->cart_id),
            new UserId($row->user_id),
            $row->final_total
        );
    }

    public function save(Cart $cart): void
    {
        // TODO: Implement save() method.
    }

    public function update(Cart $cart): void
    {
        // TODO: Implement update() method.
    }

    public function delete(Cart $cart): void
    {
        // TODO: Implement delete() method.
    }
}
