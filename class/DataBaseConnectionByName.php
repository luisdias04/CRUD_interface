<?php
namespace Src;

use PDO;
use Exception;

class DataBaseConnectionByName
{    
    private $connection; 
    
    public function __construct($lookForThisDataBaseName){
        $this->setConnectionByTheName($lookForThisDataBaseName);       
   }   
   public function getConnection(){
       return $this->connection;
   }
     
    public function setConnectionByTheName($name){
    
        try{            
            switch ($name) {
               
                case "contabilidade":
                    $this->connection= 
                    new PDO('mysql:dbname=teste2; host=127.0.0.1; port=33066', 'root','y0k0');
                break;
                case "santidade":
                   $this->connection=
                   new PDO('mysql:dbname=teste2; host=127.0.0.1; port=33066', 'root','y0k0');
                break;
                default:                
                   $this->connection=new PDO($name);
            }
        }catch(Exception $e){
            echo"$e, Não foi possível conectar ao banco de dados!";
        }
    }
}