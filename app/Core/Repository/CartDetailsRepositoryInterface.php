<?php

namespace App\Core\Repository;

use App\Core\Models\CartDetails\CartDetails;
use App\Core\Models\CartDetails\CartDetailsId;
use Illuminate\Support\Facades\DB;

interface CartDetailsRepositoryInterface
{
    public function byId(CartDetailsId $cartDetailsId): void;
    public function save(CartDetails $cartDetails): void;
    public function update(CartDetails $cartDetails): void;
    public function delete(CartDetails $cartDetails): void;

}
