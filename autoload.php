<?php 
function __autoload($className) 
{
    if(file_exists('App/'.$className.'.php')){
        require_once'App/'.$className.'.php';
    }

}