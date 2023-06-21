<?php

namespace App\Core\Repository;

use App\Core\Models\Cart\Cart;
use App\Core\Models\Cart\CartId;

interface CartRepositoryInterface
{
    public function byId(CartId $cartId): ?Cart;
    public function save(Cart $cart): void;
    public function update(Cart $cart): void;
    public function delete(Cart $cart): void;
}
