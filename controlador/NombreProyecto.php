<?php

include("bd.php");

$ConsultaP="select * from proyecto where CodigoProyecto='".$Registro["CodigoProyecto"]."'";

$ResultadoP=false;
    try {
    $ResultadoP= mysqli_query($Conexion, $ConsultaP);
       }
       catch (exception $e)
       { $Mensaje="No se pudo registrar el proyecto por error en los datos";
          //$error=$e->getMessage();
          Print $e->getMessage();
          //print $Resultado();
       }
  if($Resultado ==FALSE) { $Mensaje="No se pudo registrar el proyecto";
                   //die($mysqli_error($Conexion));  
              }
    else {
        $RegistroP=$ResultadoP->fetch_assoc();
        echo $RegistroP["NombreProyecto"];
         }
                    
        
            
        ?>