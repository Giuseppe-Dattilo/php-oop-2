<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $ingredients;
    public $weight;
    public $brand;
    
   

    public function __construct( $description, $category, $price, $picture, $ingredients, $weight, $brand)
    {
        parent:: __construct($description, $category, $price, $picture);

        $this->ingredients = $ingredients;
        $this->weight = $weight;
        $this->brand = $brand;
    }
}