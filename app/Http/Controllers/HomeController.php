<?php

namespace App\Http\Controllers;

use App\Core\Repository\ProductRepositoryInterface;

class HomeController extends Controller
{
    public function __construct(
        private ProductRepositoryInterface $productRepository,

    ){}

    public function index()
    {
        $productArray = $this->productRepository->getAll();
        return view('home.main', [
            'products' => $productArray,
        ]);
    }
}
