<?php

namespace src\Models;
use \src\Services\DB;

abstract class AcrtiveRecordEntity{

    protected $id;
    private static $db;

     public function __set($name, $value){
          $newProperty = $this->upperToCamel($name);
          $this->$newProperty = $value;
    }

    private function upperToCamel(string $name){
        return lcfirst(str_replace('_', '',ucwords($name,'_')));
    }
    public static function findAll(){
        $db = DB::getInstance();
        return $db->query('SELECT * FROM `'.static::getTableName().'`', [], static::class);
    }


    public static function getById(int $id){
        $db = DB::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'` WHERE id=:id;';
        return $db->query($sql, ['id'=>$id], static::class)[0];
    }
    public function getId() :int
    {
        return $this->id;
    }

    private function camelToUpper(string $name){
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name));
    }

    private function mapPropertiesToDBFormat(){
          $reflector = new \ReflectionObject($this);
            $properties = $reflector->getProperties();
            $propertiesName = [];
            foreach($properties as $property){
                $propertyName = $property->getName();
                $propertyNameDbFromat = $this->camelToUpper($propertyName);
                $propertiesName[$propertyNameDbFromat] = $this->$propertyName;
            }
           // print_r($propertiesName);
            return $propertiesName;
    }


    public function save(){
        $mapProperties = $this->mapPropertiesToDBFormat();
        if ($this->id == null) $this->store($mapProperties);
        else $this->update($mapProperties);
    }

    private function store(array $mapProperties){
        $db = DB::getInstance();
        $mappedProperties = array_filter($mapProperties);
        $properties = [];
        $values = [];
        $property2value = [];
       foreach($mappedProperties as $key=>$value){
            $properties[] = '`'.$key.'`';
            $property = ":$key";
            $values[] = $property;
            $property2value[$key] = $value;
       }
     
     
     
    //  print_r($properties);
       $sql = ' INSERT INTO`'.static::getTableName().'`
       ('.implode(',', $properties).')
        VALUES ('.implode(',', $values).')';
        return $db->query($sql, $property2value, static::class);
    } 

    private function update(array $mappedProperties){
        $db = DB::getInstance();
        $column2param = [];
        $param2value = [];
        foreach($mappedProperties as $key=>$value){
            $column = "`$key`";
            $param = ":$key";
            $column2param[] = $column.'='.$param;
            $param2value[$key] = $value;
        }
        print_r($param2value);
        $sql ='UPDATE `'.static::getTableName().'` SET '.implode(',', $column2param).'
         WHERE `id`=:id';
         return $db->query($sql, $param2value, static::class);
    }

    public function delete(){
        $db = DB::getInstance();
        $sql = 'DELETE FROM `'.static::getTableName().'` WHERE `id`=:id';
        return $db->query($sql, [':id'=>$this->id], static::class);
    }
}