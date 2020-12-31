<?php

class DataBaseLogin extends DataBasePasswordMemory
{
    public function DadaBaseLogin($value){        
        switch ($value) {                
            case "contabilidade":
                $password="localhost contabilidade root";                
            break;
            case "santidade":
                $password="localhost santidade root";                             
            break;
            default:                
                $password=$value;
            break;  
        }          
    $this->setDataBasePassword($password);
    }  
}
?>