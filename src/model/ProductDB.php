<?php
namespace App\model;

class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['name'], $item['price'], $item['description'], $item['producer']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }
    public function Creat($product){
        $sql = "INSERT INTO `products`(`name`,`price`,`description`,`producer`) VALUES (:name,:price,:description,:producer)";
        $stmt=$this->connection->prepare($sql);
        $stmt->bindParam(':name',$product->getName());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':description',$product->getDescription());
        $stmt->bindParam(':producer',$product->getProducer());
        return $stmt->execute();
    }
}