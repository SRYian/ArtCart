<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\CartDetails\CartDetails;
use App\Core\Models\CartDetails\CartDetailsId;
use App\Core\Repository\CartDetailsRepositoryInterface;

class CartDetailsRepository implements CartDetailsRepositoryInterface
{
    public function save(CartDetails $cartDetails): void
    {
        $payload = [

        ];
        DB::table('cart_details')->insert($payload);
    }

    public function byId(CartDetailsId $cartDetailsId): void
    {
        // TODO: Implement byId() method.
    }

    public function update(CartDetails $cartDetails): void
    {
        // TODO: Implement update() method.
    }

    public function delete(CartDetails $cartDetails): void
    {
        // TODO: Implement delete() method.
    }
}
