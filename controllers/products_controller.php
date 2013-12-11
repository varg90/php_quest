<?php
include_once(__FILE__ . '../models/product.php');
class products_controller
{
	public function list()
	{
		$product = new product_model;
		$products = $product->get_all();
		return $products;
	}
}