<?php

namespace src\Services;

class DB{
    private $pdo;
    private static $instince;
    
    private function __construct(){
        $dbOptions = require 'settings.php';
        $this->pdo = new \PDO(
            'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
        );
        //var_dump($this->pdo)
        $this->pdo->exec('SET NAMES utf8mb4');
    }
     

    public static function getInstance(){
        if (self::$instince === null) self::$instince = new self();
        return self::$instince;
    }
    public function query(string $sql, $parameters = [], string $className='stdClass') 
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($parameters);
        if($result === false){
            return null;
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }
}