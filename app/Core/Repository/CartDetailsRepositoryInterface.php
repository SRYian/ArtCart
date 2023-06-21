<?php

namespace App\Core\Repository;

use App\Core\Models\Cart\CartId;
use App\Core\Models\CartDetails\CartDetails;
use App\Core\Models\CartDetails\CartDetailsId;
use Illuminate\Support\Facades\DB;

interface CartDetailsRepositoryInterface
{
    public function byCartId(CartId $cartId): array;
    public function save(CartDetails $cartDetails): void;
    public function update(CartDetails $cartDetails): void;
    public function delete(CartDetails $cartDetails): void;

}
