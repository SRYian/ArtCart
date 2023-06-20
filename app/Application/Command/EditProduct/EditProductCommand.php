<?php

namespace App\Application\Command\EditProduct;

use App\Core\Repository\ProductRepositoryInterface;

class EditProductCommand
{
    private ProductRepositoryInterface $productRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function  execute(EditProductRequest $request)
    {
        //TODO:create product edit request
    }
}
