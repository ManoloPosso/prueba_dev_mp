<?php 

include "modelo/conexion.php";

class Empleados {

    private $Empleados;
    private $db = $conexion;

    public function __construct(){
        $this->Empleados = array();
        
    }

}


?>