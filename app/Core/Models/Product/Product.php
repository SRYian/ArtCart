<?php

namespace App\Core\Models\Product;

class Product
{
    private ProductId $id;


    private string $name;
    private int $price;
    private int $weight;
    private int $stock;


    private string $description;
    private string $photo_url;


    /**
     * @return ProductId
     */
    public function getId(): ProductId
    {
        return $this->id;
    }
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
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
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
        return $this->photo_url;
    }

    /**
     * @param string $photo_url
     */
    public function setPhotourl(string $photo_url): void
    {
        $this->photo_url = $photo_url;
    }


    /**
     * @param string $name
     * @param int $price
     * @param int $weight
     * @param string $description
     * @param string $photourl
     */
    public function __construct(ProductId $id, string $name, int $price, int $weight, int $stock, string $description, string $photourl)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->stock = $stock;
        $this->description = $description;
        $this->photo_url = $photourl;
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
        $this->photo_url = $photourl;
    }
}
