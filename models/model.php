<?php
class model
{
    private $_config = [
        'host' => '127.0.0.1',
        'db' => 'php_quest',
        'user' => 'root',
        'password' => ''
    ];

    public function __construct()
    {
        $dbh = new PDO(
            'mysql:host=' . $this->_config['host'] . ';dbname=' . $this->_config['db'],
            $this->_config['user'],
            $this->_config['password']
        );
    }
}