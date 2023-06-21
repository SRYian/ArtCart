<?php

namespace App\Application\Query\Buyer;

use App\Core\Models\User\UserId;

interface BuyerAccountQueryInterface
{
    public function execute(UserId $userId): ?BuyerAccountDto;
}
