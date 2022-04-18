<?php

class Connexion{
    private $servername = "localhost" ;
    private  $username = "root";
    private $password = "";
    private $db = "contactgestion";

    public  function connect(){ 

            $conn= new mysqli($this->servername, $this->username, $this->password, $this->db);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $conn ;
    }
}

?> 