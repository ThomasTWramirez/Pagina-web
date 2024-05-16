<?php
include("bd.php");
if(!empty($_GET["CodigoEspecialidad"])){
$CodigoEspecialidad=$_GET["CodigoEspecialidad"];
$ConsultaES="DELETE FROM especialidad WHERE especialidad.CodigoEspecialidad = ".$CodigoEspecialidad;

//echo $ConsultaES;

$Resultado=false;
try {
    $ResultadoES= mysqli_query($Conexion, $ConsultaES);
   }
catch (Exception $e)
     { $Mensaje="No se pudo eliminar la especialidad con codigo:";
        //$error=$e->getMessage();
        Print $e->getMessage();
        //print $Resultado();
     }
if($ResultadoES ==FALSE) { $Mensaje="No se pudo eliminar la especialidad con codigo:".$CodigoEspecialidad;
                 //die($mysqli_error($Conexion));  
            }
    else { $Mensaje="Se elimino la especialidad con codigo: ".$CodigoEspecialidad;
        }
        echo $Mensaje;
    }//Fin si externo 
?>