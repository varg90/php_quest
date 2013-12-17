<?php
class ProductsController
{
    /*
     * @return array
     */
    public function productsList()
    {
        $product = new ProductModel();
        $products = $product->getAll();
        return $products;
    }
}