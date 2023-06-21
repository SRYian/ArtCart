<?php

namespace App\Application\Command\AddCart;

use App\Core\Models\User\UserId;

class AddCartRequest
{
    public function __construct(
        public UserId $user_id,
        public string $product_id,
    ) {
    }
}
