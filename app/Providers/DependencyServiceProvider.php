<?php

namespace App\Providers;


use App\Core\Repository\ProductRepositoryInterface;
use App\Infrastructure\Repository\MySQL\ProductRepository;
use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query

        //Service
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
