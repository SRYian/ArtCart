<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\User\UserId;
use App\Core\Repository\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function byId(UserId $userId): ?User
    {
        // TODO: Implement byId() method.
    }

    public function byEmail(string $email): ?User
    {
        // TODO: Implement byEmail() method.
    }

    public function save(User $user): void
    {
        // TODO: Implement save() method.
    }

    public function update(User $user): void
    {
        // TODO: Implement update() method.
    }

    public function delete(User $user): void
    {
        // TODO: Implement delete() method.
    }
}
