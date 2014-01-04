<?php
class ProductController
{
    /*
     * @return array
     */
    public function index()
    {
        $product = new ProductModel();
        $products = $product->getAll();
        return $products;
    }

    public function add(){
        
    }
}