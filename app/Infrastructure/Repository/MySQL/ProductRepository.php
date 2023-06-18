<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use Illuminate\Support\Facades\DB;

class ProductRepository implements \App\Core\Repository\ProductRepositoryInterface
{
    public function show(): array
    {
        // TODO: Implement show() method.
        $row = DB::table('product')->select(['name', 'price', 'weight', 'stock', 'description', 'photourl']);

        $productList = array();

        foreach ($row as $product) {
            $productList[] = new Product(new ProductId($product->product_id), $product->name, $product->price, $product->weight, $product->stock, $product->description, $product->photourl);
        }

        return $productList;
    }

    public function byId(ProductId $id): ?Product
    {
        $row = DB::table('product')->where('product_id', $id->id())->first();
        // TODO: Implement byId() method.
        if (!$row) return null;
        return new Product(new ProductId($row->product_id), $row->name, $row->price, $row->weight, $row->stock, $row->description, $row->photourl);
    }

    public function save(Product $product): void
    {
        // TODO: Implement save() method.
        $payload = $this->constructPayloadWithoutId($product);
        $payload['product_id'] = $product->getId();
        DB::table('product')->insert($payload);
    }

    public function update(Product $product): void
    {
        // TODO: Implement update() method.
        $payload = $this->constructPayloadWithoutId($product);
        $payload['product_id'] = $product->getId();
        DB::table('product')
            ->where('product_id', $product->getId())
            ->update($payload);
    }

    public function delete(Product $product): void
    {
        // TODO: Implement delete() method.
        DB::table('product')->delete($product->getId());
    }
    private function constructPayloadWithoutId(Product $product)
    {
        // might throw error
        return [
            "name" => $product->getName(),
            "price" => $product->getPrice(),
            "weight" => $product->getWeight(),
            "stock" => $product->getStock(),
            "description" => $product->getDescription(),
            "photourl" => $product->getPhotourl(),
        ];
    }
}
