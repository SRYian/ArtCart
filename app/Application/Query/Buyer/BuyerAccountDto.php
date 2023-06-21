<?php

namespace App\Application\Query\Buyer;

class BuyerAccountDto
{
    public function __construct(
        public string $user_id,
        public string $curr_cart_id,
        public string $shipping_address,
        public string $phone,
    )
    {}
}
