<?php
class ProductModel extends Model
{
    protected $_table = 'product';
    protected $_id;
    protected $_name;
    protected $_cost;

    public function getId()
    {
        return $this->_id;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setCost($cost)
    {
        $this->_cost = $cost;
    }

    public function getCost()
    {
        return $this->_cost;
    }

    public function getAll()
    {
        $products = array();
        foreach ($this->_db->query('SELECT * FROM ' . $this->_table) as $row) {
            $products[] = $row;
        }
//        echo "<pre>" . print_r($products, true) . "</pre>"; die;
        return $products;
    }
}