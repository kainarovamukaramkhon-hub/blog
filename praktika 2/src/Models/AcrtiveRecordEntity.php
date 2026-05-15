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
                $propertiesName = $property->getName();
                $propertiesNameDbFromat = $this->camelToUpper($propertyName);
                $propertiesName[$propertyNameDbFromat] = $this->$propertyName;
            }
            print_r($propertiesName);
            return;
    }


    public function save(){
        $mapProperties = $this->mapPropertiesToDBFormat();
        if ($this->id == null) $this->store();
        else $this->update();
    }

    private function store(){
        //
    }

    private function update(){
        //
    }

}