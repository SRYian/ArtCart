<?php

namespace App\Application\Query\Seller;

use App\Core\Models\User\UserId;

interface OrderQueryInterface
{
    public function execute(UserId $userId): ?SellerAccountDto;
}
