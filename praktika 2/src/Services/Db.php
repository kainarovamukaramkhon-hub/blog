<?php

namespace src\Services;

class DB{
    private $pdo;

    public function __construct(){
        $dbOptions = require 'settings.php';
        $this->pdo = new \PDO(
            'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
        );
        //var_dump($this->pdo)
        $this->pdo->exec('SET NAMES utf8mb4');
    }

    public function query(string $sql, $parameters = []) :?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($parameters);
        if($result === false){
            return null;
        }
        return $sth->fetchAll();
    }
}