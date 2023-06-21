<?php

namespace App\Core\Repository;

use App\Core\Models\User\UserId;

interface BuyerAccountRepositoryInterface
{
    public function byId(UserId $userId);
}
