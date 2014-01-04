<? include_once(__DIR__ . '/include.php'); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
<?
$controller = new ProductController();
$controller->add();
?>
<form name="add" method="POST" action="<?= $_SERVER["PHP_SELF"] ?>">
    <p>
        <label for="product-name-field">Product Name:</label>
        <input type="text" name="name" id="product-name-field">

    </p>

    <p>
        <label for="product-cost-field">Product Cost:</label>
        <input type="text" name="cost" id="product-cost-field">
    </p>

    <p>
        <input type="submit" name="submit" class="submit-btn">
    </p>
</form>
</body>
</html>