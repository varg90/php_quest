<?php include_once(__DIR__ . '/include.php'); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
<?php
$controller = new ProductController();
$controller->add();
?>
<form name="add" method="POST" action="">
    <p>
        <label>
            <input type="text" name="name" id="product-name-field">
        </label>
    </p>

    <p>
        <label>
            <input type="text" name="cost" id="product-cost-field">
        </label>
    </p>

    <p>
        <label>
            <input type="submit" name="submit" class="submit-btn">
        </label>
    </p>
</form>
</body>
</html>