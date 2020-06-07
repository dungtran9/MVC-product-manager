<?php
use controller\ProductController;
include_once "model/DBconnection.php";
include_once "model/Product.php";
include_once "model/ProductDB.php";
include_once "controller/ProductController.php";
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$controller = new ProductController();

switch ($page) {
    case 'add':
        $controller->add();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    default:
        $controller->index();
        break;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
