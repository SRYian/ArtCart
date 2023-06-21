<?php

namespace App\Application\Command\AddCart;

class AddCartRequest
{
    public function __construct(
        public string $user_id,
        public string $product_id,
    ) {
    }
}
