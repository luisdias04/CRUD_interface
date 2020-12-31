<?php
class PDOtable extends PDOconnect
{    
    private $table;    
     
    public function getTable(){
        return $this->table;
    }
    
    public function setTable(){        
        $connection=$this->getPdo();
        $dataBaseNameToConnect=$this->getDataBasePassword();
        $getAlltableBythisQuery=
        "SELECT * FROM information_schema.tables WHERE table_schema = '$dataBaseNameToConnect[1]';";
        $tableObject=$connection->query($getAlltableBythisQuery)->fetchAll(); 
        $this->table=$tableObject;
    }    
}
?>