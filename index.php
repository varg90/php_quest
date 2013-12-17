<?php include_once(__DIR__ . '/include.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
<?php
    $controller = new ProductsController;
    echo $controller->productsList();
?>
</body>
</html>