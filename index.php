<?php include_once(__DIR__ . '/include.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <script src="styles.css"></script>
    <title>Products</title>
</head>
<body>
<?php
$controller = new ProductsController;
$products = $controller->productsList();
?>
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