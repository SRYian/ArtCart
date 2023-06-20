<?php

namespace App\Core\Models\User;

use http\Exception\InvalidArgumentException;

class Role
{
    const SELLER_ACCOUNT = 's';
    const BUYER_ACCOUNT = 'b';

    private string $role;

    public function __construct(string $role)
    {
        if (
            $role != self::BUYER_ACCOUNT & $role != self::SELLER_ACCOUNT
        ) {
            throw new InvalidArgumentException('role_tidak_sesuai');
        }

        $this->role = $role;
    }

    public function isBuyer(): bool
    {
        if($this->role === self::BUYER_ACCOUNT) {
            return true;
        }
        else return false;
    }

    public function isSeller(): bool
    {
        if($this->role === self::SELLER_ACCOUNT) {
            return true;
        }
        else return false;
    }

}
