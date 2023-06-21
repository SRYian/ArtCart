<?php

namespace App\Core\Repository;

use App\Core\Models\Category\CategoryId;

interface CategoryRepositoryInterface
{
    public function byId(string $id);
}
