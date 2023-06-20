<?php

namespace App\Application\Command\ViewOrder;

use App\Core\Repository\OrderRepositoryInterface;

class ViewOrderCommand
{
    private OrderRepositoryInterface $orderRepository;

    /**
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function  execute()
    {
    }
}
