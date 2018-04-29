<?php

namespace chertoha\functions;


function connectionDB(){
    $link = new mysqli('localhost', 'root', 'root', 'testsite');
    $link->query("SET NAMES 'UTF8'") or die('Cannot set charset');
    if (!empty($link->connect_error)){
        die ('No connection to server, error: '.$link->connect_error);
    }    
    return $link;
}



