<?php

require_once __DIR__ . '/Product.php';

class Game extends Product
{
    public $material;
    public $size;
   

    public function __construct( $description, $category, $price, $picture, $material, $size)
    {
        parent:: __construct($description, $category, $price, $picture);

        $this->material = $material;
        $this->size = $size;
    }
}