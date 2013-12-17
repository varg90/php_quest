<?php
class ProductModel extends Model
{
    protected $_table = 'product';
    protected $_id;
    protected $_name;
    protected $_cost;

    public function get_id()
    {
        return $this->_id;
    }

    public function set_name($name)
    {
        $this->_name = $name;
    }

    public function get_name()
    {
        return $this->_name;
    }

    public function set_cost($cost)
    {
        $this->_cost = $cost;
    }

    public function get_cost()
    {
        return $this->_cost;
    }

    public function get_all()
    {
        $products = array();
        foreach ($this->_db->query('SELECT * FROM ' . $this->_table) as $row) {
            $products[] = $row;
        }
//        echo "<pre>" . print_r($products, true) . "</pre>"; die;
        return $products;
    }
}