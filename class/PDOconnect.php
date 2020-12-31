<?php

class PDOconnect extends DataBaseLogin
{
    private $pdo;
        
    public function getPdo(){
        return $this->pdo;
    }
    
    public function setPdo(){        
        $password=$this->getDataBasePassword();   
        $this->pdo= new PDO(
            'mysql:host='.$password[0].';
            dbname='.$password[1].'',
            "$password[2]",
            isset($password[3])?"$password[3]":""
            );
    }
}
?>