<?php

namespace App\Core\Repository;

use App\Core\Models\Payment;
use App\Core\Models\PaymentId;

interface PaymentRepositoryInterface
{   
    public function byId(PaymentId $id): ?Payment;
}
