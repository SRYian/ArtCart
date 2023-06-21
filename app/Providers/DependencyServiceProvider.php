<?php

namespace App\Providers;

use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use App\Infrastructure\Query\MySQL\SellerAccountQuery;
use App\Infrastructure\Repository\MySQL\ProductRepository;
use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query
        $this->app->bind(SellerAccountQueryInterface::class, SellerAccountQuery::class);
        // Repository
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

    }
}
