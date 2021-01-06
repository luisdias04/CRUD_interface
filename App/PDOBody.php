<?php

namespace App;

class PDOBody extends PDOcolumn
{    
    private $basicStructure;

    public function getBasicStructure(){
        return $this->basicStructure;
    }

    public function setBasicStructure($dataBaseNameToConnect){
        $this->DadaBaseLogin($dataBaseNameToConnect);              
        $this->setPdo();
        $this->setTable();
        $this->setColumn();
        $table=$this->getTable();
        $column=$this->getColumn();
        $il=0;        
        foreach($table as $tableName){            
            $this->basicStructure[$il]=[$tableName['TABLE_NAME']];           
            $ic=1;           
            foreach($column[$il] as $columnName){                
                $this->basicStructure[$il][$ic]=$columnName['Field'];                
                $ic++;
            } 
            $il++;
        }        
    }    
}
?> 