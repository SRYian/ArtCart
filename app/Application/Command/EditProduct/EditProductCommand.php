<?php

namespace App\Application\Command\EditProduct;

use App\Core\Repository\ProductRepositoryInterface;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Throwable;
use function intval;
use Ramsey\Uuid\Uuid;
use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use App\Application\Exception\ApplicationException;

class EditProductCommand
{
    private ProductRepositoryInterface $productRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function  execute(EditProductRequest $request)
    {
        $product = $this->productRepository->byId(new ProductId($request->id));
        if (!$product) {
            throw new ApplicationException('produk_tidak_ditemukan');
        }
        //TODO:create product edit request
        DB::beginTransaction();
        try {
            $product->updateProduct($request->name, $request->price, $request->weight, $request->stock, $request->description, $request->photourl);
            $this->productRepository->update($product);
        } catch (Throwable $exception) {
            DB::rollBack();
            throw $exception;
        }
        DB::commit();
    }
}
