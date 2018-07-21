<?php
include_once 'products.php';

class DVD_disc extends Products
{
    private $size;

    protected function setDetails($SKU, $name, $price, $type, $size)
    {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->typeId = 1;
        $this->size = $size;
    }

    public function getAttributeValue()
    {
        return $this->size;
    }
}