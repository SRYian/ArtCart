<?php

namespace App\Providers;



use App\Application\Query\Buyer\BuyerAccountQueryInterface;
use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Repository\CartDetailsRepositoryInterface;
use App\Core\Repository\CartRepositoryInterface;
use App\Core\Repository\CategoryRepositoryInterface;
use App\Core\Repository\OrderRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use App\Infrastructure\Query\MySQL\BuyerAccountQuery;
use App\Infrastructure\Query\MySQL\SellerAccountQuery;
use App\Infrastructure\Repository\MySQL\CartDetailsRepository;
use App\Infrastructure\Repository\MySQL\CartRepository;
use App\Infrastructure\Repository\MySQL\CategoryRepository;
use App\Infrastructure\Repository\MySQL\ProductRepository;
use App\Infrastructure\Repository\MySQL\OrderRepository;

use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query
        $this->app->bind(SellerAccountQueryInterface::class, SellerAccountQuery::class);
        $this->app->bind(BuyerAccountQueryInterface::class, BuyerAccountQuery::class);

        //Service
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
        $this->app->bind(CartDetailsRepositoryInterface::class, CartDetailsRepository::class);
    }
}
