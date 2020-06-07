<?php

namespace controller;
use \model\Product;
use model\DBconnection;
use model\ProductDB;

class ProductController
{
    public $producDB;

    public function __construct()

    {
        $connection = new DBconnection("mysql:host=localhost;dbname=product_manager", "root", "Anhquan123@");
        $this->producDB = new ProductDB($connection->connect());
    }
    public function index(){
        $products= $this->producDB->getAll();
        include "view/list.php";
    }
    public function add($product){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';}
        else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $producer=$_POST['producer'];
            $product = new Product($name,$price,$description,$producer);
            $this->producDB->Creat($product);
            include 'view/add.php';
        }
    }
}