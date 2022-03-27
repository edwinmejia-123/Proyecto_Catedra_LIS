<?php
class Conectar{
    private $host, $user, $pass, $database, $port;

    public function __construct()
    {
     $this->host="localhost";
     $this->user="root";
     $this->pass="";
     $this->database="tripadvisor";
     $this->port="3306";
    }

    public function conexion(){
        $con = new mysqli($this->host,$this->user,$this->pass,$this->database,$this->port);
        return $con;
    }
}
    
?>