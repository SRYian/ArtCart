<?php

namespace App\Core\Models\Product;

class Product
{
    private string $name;
    private int $price;
    private int $weight;
    private int $stock;
    private string $description;
    private string $photourl;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPhotourl(): string
    {
        return $this->photourl;
    }

    /**
     * @param string $photourl
     */
    public function setPhotourl(string $photourl): void
    {
        $this->photourl = $photourl;
    }


    /**
     * @param string $name
     * @param int $price
     * @param int $weight
     * @param string $description
     * @param string $photourl
     */
    public function __construct(string $name, int $price, int $weight, int $stock, string $description, string $photourl)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->stock = $stock;
        $this->description = $description;
        $this->photourl = $photourl;
    }

    public function updateStock(int $stock): void
    {
        $this->weight = $stock;
    }
    public function reduceStock(int $amount): void
    {
        $this->weight -= $amount;
    }
    public function updateProduct(string $name, int $price, int $weight, int $stock, string $description, string $photourl)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->stock = $stock;
        $this->description = $description;
        $this->photourl = $photourl;
    }
}
