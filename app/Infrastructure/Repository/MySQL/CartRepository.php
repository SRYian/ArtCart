<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Cart\Cart;
use App\Core\Models\Cart\CartId;
use App\Core\Repository\CartDetailsRepositoryInterface;
use App\Core\Repository\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface
{

    public function byId(CartId $cartId): void
    {
        // TODO: Implement byId() method.
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
