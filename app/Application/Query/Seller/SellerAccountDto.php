<?php

namespace App\Application\Query\Seller;

class SellerAccountDto
{
    public function __construct(
        public string $user_id,
        public string $shop_name,
        public string $shop_address,
        public string $phone,
    ) {}
}
