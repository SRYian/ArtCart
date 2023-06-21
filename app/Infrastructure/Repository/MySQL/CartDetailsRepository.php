<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Cart\CartId;
use App\Core\Models\CartDetails\CartDetails;
use App\Core\Models\CartDetails\CartDetailsId;
use App\Core\Models\Product\ProductId;
use App\Core\Models\User\UserId;
use App\Core\Repository\CartDetailsRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;

class CartDetailsRepository implements CartDetailsRepositoryInterface
{
    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository) {
        $this->productRepository =$productRepository;
    }
    public function save(CartDetails $cartDetails): void
    {
//        $payload = $this->cons
//        DB::table('cart_details')->insert($payload);
    }

    private function constructPayloadWithoutId(CartDetails $cartDetails)
    {
        // might throw error
        return [
            "quantity" => $cartDetails->getQuantity(),
            "price" => $cartDetails->getPrice(),
            "user_id" => $cartDetails->getUserId(),
            "product_id" => $cartDetails->getProductId(),
            "cart_id" => $cartDetails->getCartId(),
        ];
    }

    public function byCartId(CartId $cartId): array
    {
//        $rows = DB::table('cart_details')->select(['cart_details_id', 'quantity', 'price', 'user_id', 'product_id', 'order_id', 'cart_id'])
//        ->where('cart_id', $cartId->id());
        $sql = "SELECT *
                FROM artcart.cart_details
                WHERE cart_id = :id";
        $rows = DB::select($sql, [
            'id' => $cartId->id()
        ]);



        $cartDetailsList = array();
        foreach($rows as $item) {
            $product = $this->productRepository->byId(new ProductId($item->product_id));
            $cartDetailsList[] = new CartDetails(
                new CartDetailsId($item->cart_details_id),
                $cartId,
                new UserId($item->user_id),
                new ProductId($item->product_id),
                $item->quantity,
                $item->price,
                $product->getName(),
                $product->getStock()
            );
        }

        return $cartDetailsList;
    }

    public function byCartIdAndProductId(CartId $cartId, ProductId $productId): ?CartDetails
    {
//        $rows = DB::table('cart_details')->select(['cart_details_id', 'quantity', 'price', 'user_id', 'product_id', 'order_id', 'cart_id'])
//        ->where('cart_id', $cartId->id());
        $sql = "SELECT *
                FROM artcart.cart_details
                WHERE cart_id = :id AND product_id = :prodId";
        $item = DB::select($sql, [
            'id' => $cartId->id(),
            'prodId' => $productId->id()
        ]);

        if($item[0] == null) return null;


        $product = $this->productRepository->byId($productId);
        return new CartDetails(
            new CartDetailsId($item[0]->cart_details_id),
            $cartId,
            new UserId($item[0]->user_id),
            new ProductId($item[0]->product_id),
            $item[0]->quantity,
            $item[0]->price,
            $product->getName(),
            $product->getStock()
        );
    }

    public function update(CartDetails $cartDetails): void
    {
        // TODO: Implement update() method.
    }

    public function delete(CartDetails $cartDetails): void
    {
        // TODO: Implement delete() method.
    }
}
