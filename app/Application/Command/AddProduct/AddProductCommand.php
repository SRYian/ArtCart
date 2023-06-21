<?php

namespace App\Application\Command\AddProduct;

use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use App\Core\Repository\ProductRepositoryInterface;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Throwable;
use function intval;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;

class AddProductCommand
{
    private ProductRepositoryInterface $productRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function  execute(AddProductRequest $request)
    {
        // string $name,
        // int $price,
        // int $weight,
        // int $stock,
        // string $description
        DB::beginTransaction();
        try {
            Log::debug('f');
            $product = new Product(new ProductId(Uuid::uuid4()), $request->name, $request->price, $request->weight, $request->stock, $request->description, $request->photourl);
            $this->productRepository->save($product);
        } catch (Throwable $exception) {
            DB::rollBack();
            throw $exception;
        }
        DB::commit();
    }
}
