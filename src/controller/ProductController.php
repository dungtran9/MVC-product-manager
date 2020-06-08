<?php

namespace App\controller;
use App\model\ProductDB;
use App\model\DBconnection;
use App\model\Product;

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
        include "src/view/list.php";
    }
    public function add($product){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/view/add.php';}
        else {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $description = $_REQUEST['description'];
            $producer=$_REQUEST['producer'];
            $product = new Product($name,$price,$description,$producer);
            $this->producDB->Creat($product);
            include 'src/view/add.php';
        }
    }
}