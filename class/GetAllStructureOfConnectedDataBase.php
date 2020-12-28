<?php
class GetAllStructureOfConnectedDataBase extends DataBaseConnectionByName
{    
    private $dataBaseStructure;
    
    public function __construct($dataBaseNameToConnect){
        $this->setDataBaseStructure($dataBaseNameToConnect);        
    }    
    
    public function setDataBaseStructure($dataBaseNameToConnect){        
        $pdo=new DataBaseConnectionByName($dataBaseNameToConnect);        
        $connection=$pdo->getConnection();
        $getAllTableStructureBythisQuery=
        "SELECT * FROM information_schema.tables WHERE table_schema = '$dataBaseNameToConnect';";
        $tableStructureObject=$connection->query($getAllTableStructureBythisQuery)->fetchAll();  

        $i=0;
        foreach($tableStructureObject as $setColumnByTableName){
            $tableNameLoaded=$setColumnByTableName['TABLE_NAME'];
            $getAllColumnStructureBythisQuery=
            "DESCRIBE $tableNameLoaded;";
            $tableAndColumnToJoin=
            $connection->query($getAllColumnStructureBythisQuery)->fetchAll();
            $tableStructureObject[$i][21]=$tableAndColumnToJoin;
            $i++;    
        }  
        $this->dataBaseStructure=$tableStructureObject;
    }

    public function getDataBaseStructure(){
    return $this->dataBaseStructure;
    }
}
?>