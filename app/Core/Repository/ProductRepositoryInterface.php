<?php

namespace App\Core\Repository;

use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;

interface ProductRepositoryInterface
{
    public function byId(ProductId $id): ?Product;
    public function show(): array;

    public function save(Product $product): void;
    public function update(Product $product): void;
    public function delete(Product $product): void;
}
