<?php

declare(strict_types=1);

namespace App\Core\Models\Product;


class PhotoUrlProduct
{
    private string $photourl;

    public function __construct(string $photourl)
    {
        $this->photourl = $photourl;
    }

    public function getPhotoUrlProduct() : string
    {
        return $this->photourl;
    }
}
