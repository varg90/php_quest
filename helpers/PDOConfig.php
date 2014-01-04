<?php
class PDOConfig extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    public function __construct($config){
        $configData = parse_ini_file('config/' . $config . '.ini');
        $this->engine = $configData['engine'];
        $this->host = $configData['host'];
        $this->database = $configData['db'];
        $this->user = $configData['user'];
        $this->pass = $configData['password'];
        parent::__construct( $this->engine.':dbname='.$this->database.";host=".$this->host, $this->user, $this->pass );
    }
}
?>