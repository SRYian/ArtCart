<?php

namespace App\Core\Models\User;

use Ramsey\Uuid\Uuid;

class UserId
{
    private string $id;

    public function __construct(string $id)
    {
        if (Uuid::isValid($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("Invalid CartDetailsId format.");
        }
    }

    public function id(): string
    {
        return $this->id;
    }

    public function equals(UserId $user_id): bool
    {
        return $this->id === $user_id->id;
    }
}
