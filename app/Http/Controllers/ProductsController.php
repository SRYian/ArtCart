<?php

namespace App\Http\Controllers;

use App\Core\Models\Product\ProductId;
use App\Core\Repository\CategoryRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct(
        private ProductRepositoryInterface $productRepository,
        private CategoryRepositoryInterface $categoryRepository,
    ){}

    public function index($id)
    {
        $product = $this->productRepository->byId(new ProductId($id));
        $category = $this->categoryRepository->byId($product->getCategoryId());
        return view('products.main', [
            'product' => $product,
            'category' => $category->getName()
        ]);
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
    }
}
