<?php

namespace App\Providers;



use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Repository\OrderRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use App\Infrastructure\Query\MySQL\SellerAccountQuery;
use App\Infrastructure\Repository\MySQL\ProductRepository;
use App\Infrastructure\Repository\MySQL\OrderRepository;

use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query
        $this->app->bind(SellerAccountQueryInterface::class, SellerAccountQuery::class);

        //Service
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }
}
