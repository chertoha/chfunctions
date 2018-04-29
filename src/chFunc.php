<?php
namespace chertoha\functions;
use mysqli;

class Link{
    private $host;
    private $login;
    private $password;
    private $database;
    
    public function __construct($host, $login, $password, $database) {
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->database = $database;
    }
    
    public function connectionDB() {
        $link = new mysqli($this->host, $this->login, $this->password, $this->database);
        $link->query("SET NAMES 'UTF8'") or die('Cannot set charset');
        if (!empty($link->connect_error)) {
            die('No connection to server, error: ' . $link->connect_error);
        }
        return $link;
    }
    
}

