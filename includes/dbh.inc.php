<?php

class Dbh{

    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    protected function connect_to_db(){
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->dbName = "oop_login_tutorial";
    
        $conn = new mysqli(
            $this->serverName, 
            $this->userName, 
            $this->password, 
            $this->dbName);

        return $conn;    
    }
}

