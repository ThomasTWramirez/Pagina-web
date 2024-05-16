<?php
include("bd.php");
if(!empty($_GET["CodigoEstudiante"])){
$CodigoEstudiante=$_GET["CodigoEstudiante"];
$ConsultaDEL="DELETE FROM estudiante WHERE estudiante.CodigoEstudiante = ".$CodigoEstudiante;

//echo $ConsultaDEL;

$Resultado=false;
try {
    $ResultadoDEL= mysqli_query($Conexion, $ConsultaDEL);
   }
catch (Exception $e)
     { $Mensaje="No se pudo eliminar el estudiante con codigo:";
        //$error=$e->getMessage();
        Print $e->getMessage();
        //print $Resultado();
     }
if($ResultadoDEL ==FALSE) { $Mensaje="No se pudo eliminar el estudiante con codigo:".$CodigoEstudiante;
                 //die($mysqli_error($Conexion));  
            }
    else { $Mensaje="Se elimino el estudiante con codigo: ".$CodigoEstudiante;
        }
        echo $Mensaje;
    }//Fin si externo 
?>