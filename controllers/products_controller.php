<?php
class products_controller
{
	public function index()
	{
		$product = new product_model;
		$products = $product->get_all();
		return $products;
	}
}