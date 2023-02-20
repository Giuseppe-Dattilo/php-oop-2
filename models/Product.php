<?php

class Product
{
    public $picture;
    public $description;
    public $category;
    public $price;

    public function __construct($description, $category, $price, $picture)
    {
        $this->description = $description;
        $this->category = $category;
        $this->price = $price;
        $this->picture = $picture;
    }
}