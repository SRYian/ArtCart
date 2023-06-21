<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Category\Category;
use App\Core\Repository\CategoryRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function byId(string $id)
    {
        $row = DB::table('category')->where('category_id', $id)->first();
        if (!$row) return null;
        return new Category($row->category_id, $row->name);

    }
}
