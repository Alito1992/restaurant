<?php
class DB{
    private $conexion;

    function __construct(){
        try{
            $this->conexion = new PDO('mysql:host=localhost;dbname=reservoir', 'root', '');
        }dd
        catch(PDOException $e){
            $this->conexion = null;
        }
    }
    function getConexion(){
        return $this->conexion;
    }
}

?>