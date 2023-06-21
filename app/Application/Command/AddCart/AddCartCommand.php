<?php

namespace App\Application\Command\AddCart;

use App\Application\Query\Buyer\BuyerAccountQueryInterface;
use App\Core\Repository\CartDetailsRepositoryInterface;
use App\Core\Repository\CartRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;

class AddCartCommand
{
    private BuyerAccountQueryInterface $buyerAccountQuery,
    private CartRepositoryInterface $cartRepository,
    private CartDetailsRepositoryInterface $cartDetailsRepository,
    private ProductRepositoryInterface $productRepository,

    public function __construct(
        BuyerAccountQueryInterface $buyerAccountQuery,
        CartRepositoryInterface $cartRepository,
        CartDetailsRepositoryInterface $cartDetailsRepository,
        ProductRepositoryInterface $productRepository,
    )
    {
        $this->productRepository = $productRepository;
        $this->cartRepository = $cartRepository;
        $this->cartDetailsRepository = $cartDetailsRepository;
        $this->buyerAccountQuery = $buyerAccountQuery;
    }
}
