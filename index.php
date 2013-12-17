<?php include_once(__DIR__ . '/include.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Products</title>
</head>
<body>
<?php
$controller = new ProductsController;
$products = $controller->productsList();
?>
<button><a href="add.php">Add Product</a></button>
<table class="center-with-border">
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['cost'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>