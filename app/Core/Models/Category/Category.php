<?php

namespace App\Core\Models\Category;

class Category
{
    private string $categoryId;
    private string $name;

    /**
     * @param string $categoryId
     * @param string $name
     */
    public function __construct(string $categoryId, string $name)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
    }



}
