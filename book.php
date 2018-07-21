<?php
include_once 'products.php';

class Book extends Products
{
    private $weigth;

    protected function setDetails($SKU, $name, $price, $type, $weigth)
    {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->typeId = 2;
        $this->weigth = $weigth;
    }

    public function getAttributeValue()
    {
        return $this->weigth;
    }
}