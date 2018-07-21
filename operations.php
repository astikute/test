<?php
require 'book.php';
require 'DVD_disc.php';
require 'furniture.php';

class Operations
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "product_list";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->username, $this->password);
    }

    public function get()
    {
        $stmt = $this->conn->prepare ("SELECT SKU, name, price, type_value, property, unit 
        FROM products INNER JOIN list_product_types 
        ON products.type=list_product_types.type_id");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function add(Products $product)
    {
        $stmt = $this->conn->prepare ("INSERT INTO products (SKU, name, price, type, type_value) 
        VALUES (:SKU, :name, :price, :type, :type_value)");
        $stmt->bindParam(':SKU', $product->getSKU());
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':type', $product->getTypeId());
        $stmt->bindParam(':type_value', $product->getAttributeValue());
        $stmt->execute();
    }

    public function delete($SKU)
    {
        $stmt = $this->conn->prepare ("DELETE FROM products WHERE SKU=?");
        $stmt->bindParam(1, $SKU);
        $stmt->execute();
    }

    public function types()
    {
        $stmt = $this->conn->prepare ("SELECT type FROM list_product_types");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
