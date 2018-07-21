<?php

abstract class Products 
{
    protected $SKU;
    protected $name;
    protected $price;
    protected $typeId;

    public function __construct($array)
    {
        call_user_func_array(array($this, "setDetails"), $array);
    }

    public function getSKU()
    {
        return $this->SKU;
    }
    public function getName() 
    {
        return $this->name;
    }
    public function getPrice() 
    {
        return $this->price;
    }
    public function getTypeId() 
    {
        return $this->typeId;
    }
    abstract public function getAttributeValue();
}