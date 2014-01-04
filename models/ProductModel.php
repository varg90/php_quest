<?
class ProductModel extends Model
{
    protected $table = 'product';
    protected $id;
    protected $name;
    protected $cost;

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getAll()
    {
        $products = array();
        foreach ($this->db->query('SELECT * FROM ' . $this->table) as $row) {
            $products[] = $row;
        }
        return $products;
    }
}