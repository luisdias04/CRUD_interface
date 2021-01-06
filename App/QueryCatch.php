<?php

namespace App;

class QueryCatch extends DBconnect
{
    private $jsom;
    private $arrayConvert;

    public function __construct($dataBaseNameToConnect){
        $this->setBasicStructure($dataBaseNameToConnect);
        $this->jsonEncoder();
    }

    public function jsonEncoder(){
        $i=0;
        $queryLoad=$this->getBasicStructure();
        foreach($queryLoad as $table){
            $connection=$this->getPdo();
            $query="SELECT * FROM $table[0];";
            $result=$connection->query($query)->fetchAll();
            $this->arrayConvert[$table[0]]=$result;            
            $i++;       } 
        $this->jsom=json_encode($this->arrayConvert);
    }
}
?>