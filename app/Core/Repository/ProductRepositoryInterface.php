<?php

namespace App\Core\Repository;

use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use App\Core\Models\User\UserId;

interface ProductRepositoryInterface
{
    public function byId(ProductId $id): ?Product;
    public function show(): array;
    public function showByUserId(UserId $userId): array;

    public function save(Product $product): void;
    public function update(Product $product): void;
    public function delete(Product $product): void;
}
