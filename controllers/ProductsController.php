<?php
class ProductsController
{
	public function productsList()
	{
		$product = new ProductModel();
		$products = $product->get_all();
		return $products;
	}
}