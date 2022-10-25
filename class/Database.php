<?php
class Database{
    protected $PDO;
    protected function getpdo(){
        if($this->PDO === null){
            $PDO = new PDO("mysql:host=localhost;dbname=annuaire", "root", "");
            $this->PDO = $PDO;
            return $PDO;
        }
        return $this->PDO;
    }
}