<?php

class PDOcolumn extends PDOtable
{
    private $column;

    public function getColumn(){
        return $this->column;
    }

    public function setColumn(){
        $connection=$this->getPdo();
        $tableObject=$this->getTable();    
        foreach($tableObject as $setColumnByTableName){
            $tableNameLoaded=$setColumnByTableName['TABLE_NAME'];        
            $getAllColumnStructureBythisQuery="DESCRIBE $tableNameLoaded;";
            $tableAndColumnToJoin=
            $connection->query($getAllColumnStructureBythisQuery)->fetchAll();
            $this->column[]=$tableAndColumnToJoin;   
        }  
    }
}
?>