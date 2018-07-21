<?php
include_once 'products.php';

class Furniture extends Products
{
    private $dimensions;

    protected function setDetails($SKU, $name, $price, $type, $heigth, $width, $length)
    {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->typeId = 3;
        $this->dimensions = $heigth."x".$width."x".$length;
    }

    public function getAttributeValue()
    {
        return $this->dimensions;
    }
}