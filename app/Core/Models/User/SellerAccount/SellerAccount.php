<?php

namespace App\Core\Models\User\SellerAccount;

use App\Core\Models\User\User;

class SellerAccount
{
    private User $user;
    private string $shop_name;
    private string $shop_address;
    private string $phone;

    /**
     * @param User $user
     * @param string $shop_name
     * @param string $shop_address
     * @param string $phone
     */
    public function __construct(User $user, string $shop_name, string $shop_address, string $phone)
    {
        $this->user = $user;
        $this->shop_name = $shop_name;
        $this->shop_address = $shop_address;
        $this->phone = $phone;
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
    public function getShopName(): string
    {
        return $this->shop_name;
    }

    /**
     * @return string
     */
    public function getShopAddress(): string
    {
        return $this->shop_address;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }


}
