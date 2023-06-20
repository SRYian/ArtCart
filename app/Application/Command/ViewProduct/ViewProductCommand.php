<?php

namespace App\Application\Command\ViewProduct;

use App\Core\Repository\ProductRepositoryInterface;

class ViewProductCommand
{
    private ProductRepositoryInterface $productRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function  execute(){

    }
}
