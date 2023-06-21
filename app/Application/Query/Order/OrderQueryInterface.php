<?php

namespace App\Application\Query\Order;

use App\Core\Models\User\UserId;

interface OrderQueryInterface
{
    public function execute(UserId $userId): ?array;
}
