<?php
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
                    $this->connection= new PDO('mysql:host=localhost;dbname=contabilidade', 'root','');
                break;
                case "santidade":
                   $this->connection=new PDO('mysql:host=localhost;dbname=santidade', 'root','');
                break;
                default:
                
                   $this->connection=new PDO($name);
            }
        }catch(Exception $e){
            echo"$e, Não foi possível conectar ao banco de dados!";
        }
    }
}

?>