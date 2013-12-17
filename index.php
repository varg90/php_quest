<?php include_once(__DIR__ . '/include.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
<?php
    $controller = new products_controller;
    echo $controller->index();
?>
</body>
</html>