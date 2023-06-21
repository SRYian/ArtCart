<?php

namespace App\Core\Repository;

use App\Core\Models\User\UserId;
use App\Models\User;

interface UserRepositoryInterface
{
    public function byId(UserId $userId): ?User;
    public function byEmail(string $email): ?User;
    public function save(User $user): void;
    public function update(User $user): void;
    public function delete(User $user): void;
}
