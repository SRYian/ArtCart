<?php

namespace App\Providers;


use App\Core\Repository\OrderRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use App\Infrastructure\Repository\MySQL\ProductRepository;
use App\Infrastructure\Repository\MySQL\OrderRepository;

use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query

        //Service
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }
}
