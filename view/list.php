
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
<h3>Products List</h3>
<a href="index.php?page=add">Creat Product</a>
<table border="1">
    <tr>
        <th>STT</th>
        <th>ProductName</th>
        <th>Price</th>
        <th>Description</th>
        <th>Product</th>
    </tr>
    <?php foreach ($products as $key => $value ): ?>
    <tr>
        <Td><?php echo ++$key ?></Td>
        <Td><?php echo $value->getName() ?></Td>
        <Td><?php echo $value->getPrice() ?></Td>
        <Td><?php echo $value->getDescription() ?></Td>
        <Td><?php echo $value->getProducer() ?></Td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>
