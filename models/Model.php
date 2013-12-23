<?php
class Model
{
    protected $_db;
    private $_config;

    public function __construct()
    {
        $this->_config = parse_ini_file('config/db.ini');
        $this->_db = new PDO(
            'mysql:host=' . $this->_config['host'] . ';dbname=' . $this->_config['db'],
            $this->_config['user'],
            $this->_config['password']
        );
    }
}