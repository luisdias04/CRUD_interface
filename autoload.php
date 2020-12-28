<?php 
function __autoload($className) 
{
    if(file_exists('class/'.$className.'.php')){
        require_once'class/'.$className.'.php';
    }

}