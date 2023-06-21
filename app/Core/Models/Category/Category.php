<?php

namespace App\Core\Models\Category;

class Category
{
    private string $categoryId;
    private string $name;

    public function __construct(string $categoryId, string $name)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
    }

    public function getId(): string
    {
        return $this->categoryId;
    }

    public function getName(): string
    {
        return $this->name;
    }



}
