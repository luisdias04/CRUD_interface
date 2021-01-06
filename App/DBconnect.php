<?php

namespace App;

class DBconnect extends PDOBody
{
    public function __construct($dataBaseNameToConnect){
        $this->setBasicStructure($dataBaseNameToConnect);       
       }
    }