
<?php

class Connect extends PDOcolumn
{    
    public function __construct($dataBaseNameToConnect){
        $this->DadaBaseLogin($dataBaseNameToConnect);              
        $this->setPdo();
        $this->setTable();
        $this->setColumn();        
    }
}
?> 