<?php

namespace App\Core\Models\User\BuyerAccount;

use App\Core\Models\Cart\Cart;
use App\Core\Models\User\User;

class BuyerAccount
{
    private User $user;
    private string $shipping_address;
    private string $phone;
    private Cart $current_cart;

    public function __construct(
        User $user,
        string $shipping_address,
        string $phone,
        Cart $current_cart
    ) {
        $this->user = $user;
        $this->shipping_address = $shipping_address;
        $this->phone = $phone;
        $this->current_cart = $current_cart;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
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
