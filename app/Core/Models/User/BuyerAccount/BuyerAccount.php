<?php

namespace App\Core\Models\User\BuyerAccount;

use App\Core\Models\Cart\Cart;
use App\Core\Models\Cart\CartId;
use App\Core\Models\User\User;
use App\Core\Models\User\UserId;

class BuyerAccount
{
    private UserId $userId;
    private string $shipping_address;
    private string $phone;
    private CartId $current_cart_id;

    public function __construct(
        UserId $userId,
        string $shipping_address,
        string $phone,
        CartId $current_cart_id
    ) {
        $this->userId = $userId;
        $this->shipping_address = $shipping_address;
        $this->phone = $phone;
        $this->$current_cart_id = $current_cart_id;
    }

    /**
     * @return User
     */
    public function getUserId(): UserId
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getShippingAddress(): string
    {
        return $this->shipping_address;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return Cart
     */
    public function getCurrentCart(): Cart
    {
        return $this->current_cart;
    }


}
