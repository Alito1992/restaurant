<?php
require_once "DB.php";

class Reserva{
    private $id, $rut, $nombre_cliente, $fechaHora;

    public function __construct($id=null, $rut=null, $nombre_cliente=null, $fechaHora=null){
        $this->id=$id;
        $this->rut=$rut;
        $this->nombre_cliente=$nombre_cliente;
        $this->fechaHora=$fechaHora;
    }

    public function getId(){return $this->id;}
    public function getRut(){return $this->rut;}
    public function getNombre_cliente(){return $this->nombre_cliente;}
    public function getfechaHora(){return $this->fechaHora;}

    public function setId($id){ $this->id=$id;}
    public function setRut($rut){ $this->rut=$rut;}
    public function setNombre_cliente($nombre_cliente){ $this->nombre_cliente=$nombre_cliente;}
    public function setfechaHora($fechaHora){ $this->fechaHora=$fechaHora;}


    public function crear(){
        $db = new DB();
        $query = "INSERT INTO reserva (rut, nombre_cliente, fechaHora) VALUES (?, ?, NOW())";
        $sentencia = $db->getConexion()->prepare($query);
        $sentencia->bindParam(1, $this->getRut());
        $sentencia->bindParam(2, $this->getNombre_cliente());
        return $sentencia->execute();

    }
}

?>