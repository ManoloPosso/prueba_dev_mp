<?php 

if (!empty($_POST["btnguardar"])) {
        
    if (!empty($_POST["nombre"]) and  !empty($_POST["correo"]) and !empty($_POST["descripcion"])) {
        


        if (!empty($_POST["sexo_m"]) or !empty($_POST["sexo_f"])) {

            echo "SEXO ELEGIDO_:  " . $sexo = $_POST["sexo_m"] == 'M' ? "M" : "F";
            
            if ($_POST["area"] > 0) {
                
                if (!empty($_POST["btncheck1"]) or !empty($_POST["btncheck2"]) or !empty($_POST["btncheck3"])) {
                    
                  //  $nombre = $_POST["nombre"];

                } else {
                    echo "NO HA SELECCIONADO ROL";
                }
                

            } else {
                echo "NO HA SELECCIONADO AREA";
            }
            
        } else {
            echo "NO HA SELECCIONADO SEXO";
        }
        
    }else{
        echo "NO HA DIGITADO LOS CAMPOS OBLIGATORIOS";
    }
}
