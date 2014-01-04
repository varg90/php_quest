<? include_once(__DIR__ . '/include.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Products</title>
</head>
<body>
<?
$controller = new ProductController;
$products = $controller->index();
?>
<button onclick="location.href='add.php'">Add Product</button>
<table class="center-with-border">
    <? foreach ($products as $product) : ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['cost'] ?></td>
        </tr>
    <? endforeach; ?>
</table>
</body>
</html>