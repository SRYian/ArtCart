<?php

namespace App\Core\Repository;

use App\Core\Models\Payment;

interface PaymentRepositoryInterface
{   
    public function byId(Payment $id): ?Payment;
}
