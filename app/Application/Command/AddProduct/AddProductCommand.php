<?php

namespace App\Application\Command\AddProduct;

use App\Core\Repository\ProductRepositoryInterface;

class AddProductCommand
{
    private ProductRepositoryInterface $productRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function  execute(AddProductRequest $request)
    {
        //TODO:create product add request

    }
}
