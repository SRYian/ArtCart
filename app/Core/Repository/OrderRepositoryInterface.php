<?php

namespace App\Core\Repository;

use App\Core\Models\Order\Order;
use App\Core\Models\Order\OrderId;

interface OrderRepositoryInterface
{
    public function byId(OrderId $id): ?Order;
    public function show(): array;
    public function save(Order $order): void;
    public function update(Order $order): void;
}
