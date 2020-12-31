<?php

class DataBasePasswordMemory
{
    private $dataBasePassword=array();

    public function getDataBasePassword(){
        return $this->dataBasePassword;
    }

    public function setDataBasePassword($text){
        $stringToArray=
        str_word_count($text, 1, "0123456789*!.&%$#@^çÇªº¨~-_:§|");        
        $this->dataBasePassword=$stringToArray;
    }
}
?>