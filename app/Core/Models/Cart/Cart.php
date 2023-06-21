<?php

namespace App\Core\Models\Cart;

use App\Core\Models\CartDetails\CartDetails;
use App\Core\Models\CartDetails\CartDetailsId;
use App\Core\Models\Coupon\CouponCode;
use App\Core\Models\Product\ProductId;
use App\Core\Models\User\UserId;

class Cart
{
    private CartId $cart_id;
    private ?string $coupon_code;
    private UserId $user_id;
    private int $final_total;


    public function __construct(
        CartId $cart_id,
        UserId $user_id,
        ?CouponCode $couponCode = null,
        int $final_total = 0
    ) {
        $this->cart_id = $cart_id;
        $this->user_id = $user_id;
        $this->final_total = $final_total;
    }

    public function addCartDetails(
        ProductId $product_id,
        int $quantity,
        int $price
    ): CartDetails {
        $this->final_total += $quantity * $price;
        return new CartDetails(
            cart_details_id: new CartDetailsId(),
            cartId: $this->cart_id,
            user_id: $this->user_id,
            product_id: $product_id,
            quantity: $quantity,
            price: $price
        );
    }

    /**
     * @return CartId
     */
    public function getCartId(): CartId
    {
        return $this->cart_id;
    }

    /**
     * @return string
     */
    public function getCouponCode(): string
    {
        return $this->coupon_code;
    }

    /**
     * @param string $coupon_code
     */
    public function setCouponCode(string $coupon_code): void
    {
        $this->coupon_code = $coupon_code;
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId
    {
        return $this->user_id;
    }

    /**
     * @return int
     */
    public function getFinalTotal(): int
    {
        return $this->final_total;
    }

    /**
     * @param int $final_total
     */
    public function setFinalTotal(int $final_total): void
    {
        $this->final_total = $final_total;
    }


}
