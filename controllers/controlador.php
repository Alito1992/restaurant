
<?php include "sections/header.html";?>
<?php

require_once "/../models/reserva.php";

class ReservaControlador{
    public $reserva;
    
    public function __construct(){
        $this->reserva = new Reserva();
    }
    public function crear($rut=null, $nombre_cliente=null){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            include "views/sections/header.php";
            include "views/inicio.php";
            include "views/sections/footer.php";
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->reserva->setRut($_POST['rut']);
            $this->reserva->setNombre_cliente($_POST['nombre_cliente']);
                if($this->reserva->crear()){
                    echo "Reserva realizada con Exito";
                    echo "<br>";
                    echo "<a href='index.php>Volver</a>";
                }else{
                    echo "ERROR, NO ha reservado mesa";
                    echo "<br>";
                    echo "<a href='index.php>Volver</a>";

                }
        }
    }
}

?>
<?php include "sections/footer.html";?>
