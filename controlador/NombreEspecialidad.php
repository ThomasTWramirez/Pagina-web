<?php

include("bd.php");

$ConsultaE="select * from especialidad where CodigoEspecialidad='".$Registro["CodigoEspecialidad"]."'";

$ResultadoE=false;
    try {
    $ResultadoE= mysqli_query($Conexion, $ConsultaE);
       }
       catch (exception $e)
       { $Mensaje="No se pudo registrar la especialidad por error en los datos";
          //$error=$e->getMessage();
          Print $e->getMessage();
          //print $Resultado();
       }
  if($Resultado ==FALSE) { $Mensaje="No se pudo registrar la especialidad";
                   //die($mysqli_error($Conexion));  
              }
    else {
        $RegistroE=$ResultadoE->fetch_assoc();
        echo $RegistroE["NombreEspecialidad"];
         }
                    
        
            
        ?>