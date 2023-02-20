<?php

require_once __DIR__ . '/Product.php';

class Bed extends Product
{
    public $size;
    public $weight;
   

    public function __construct( $description, $category, $price, $picture, $size, $weight)
    {
        parent:: __construct($description, $category, $price, $picture);

        $this->size = $size;
        $this->weight = $weight;
    }
}