<?php

namespace App\Application\Command\AddCart;

use App\Application\Query\Buyer\BuyerAccountQueryInterface;
use App\Core\Models\Cart\Cart;
use App\Core\Models\Cart\CartId;
use App\Core\Models\CartDetails\CartDetails;
use App\Core\Models\CartDetails\CartDetailsId;
use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use App\Core\Models\User\UserId;
use App\Core\Repository\CartDetailsRepositoryInterface;
use App\Core\Repository\CartRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;
use Throwable;

class AddCartCommand
{
    private BuyerAccountQueryInterface $buyerAccountQuery;
    private CartRepositoryInterface $cartRepository;
    private CartDetailsRepositoryInterface $cartDetailsRepository;
    private ProductRepositoryInterface $productRepository;

    public function __construct(
        BuyerAccountQueryInterface $buyerAccountQuery,
        CartRepositoryInterface $cartRepository,
        CartDetailsRepositoryInterface $cartDetailsRepository,
        ProductRepositoryInterface $productRepository,
    )
    {
        $this->productRepository = $productRepository;
        $this->cartRepository = $cartRepository;
        $this->cartDetailsRepository = $cartDetailsRepository;
        $this->buyerAccountQuery = $buyerAccountQuery;
    }

    public function execute(AddCartRequest $request)
    {
        $buyer = $this->buyerAccountQuery->execute($request->user_id);
        $cartDetails = $this->cartDetailsRepository->byCartIdAndProductId(new CartId($buyer->curr_cart_id) , new ProductId($request->product_id));
        $product = $this->productRepository->byId(new ProductId($request->product_id));
        if($cartDetails == null) {
            $newCartDetails = new CartDetails(
                cart_details_id:  new CartDetailsId(Uuid::uuid1()),
                cartId:  new CartId($buyer->curr_cart_id),
                user_id:  $request->user_id,
                product_id:  $product->getId(),
                quantity: 1,
                price: $product->getPrice(),
                name: $product->getName(),
                stock: $product->getStock()
            );

            DB::beginTransaction();
            try {
                Log::debug('f');
                $this->cartDetailsRepository->save($newCartDetails);
            } catch (Throwable $exception) {
                DB::rollBack();
                throw $exception;
            }

        } else {
            $newCartDetails = $cartDetails;
            $newCartDetails->setQuantity($cartDetails->getQuantity() + 1);
            $newCartDetails->setPrice($product->getPrice() * $newCartDetails->getQuantity());

            DB::beginTransaction();
            try {
                Log::debug('f');
                $this->cartDetailsRepository->update($newCartDetails);
            } catch (Throwable $exception) {
                DB::rollBack();
                throw $exception;
            }
        }
        DB::commit();
//        $cart = $this->cartRepository->byId(new CartId($buyer->curr_cart_id));

//        DB::beginTransaction();

    }
}
