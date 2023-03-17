<?php


trait DbConection{
    private $dsn = 'mysql:host=db;port=3306;dbname=demo';
    private $user = 'demo';
    private $password = 'demo';

    protected $dbh;

    public function __construct(){
        $this->dbh = new PDO($this->dsn,$this->user,$this->password);
    }
}