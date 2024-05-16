<?php
include("bd.php");
if(!empty($_GET["CodigoProyecto"])){
$CodigoProyecto=$_GET["CodigoProyecto"];
$ConsultaLAST="DELETE FROM proyecto WHERE proyecto.CodigoProyecto = ".$CodigoProyecto;

//echo $ConsultaP;

$ResultadoLAST=false;
try {
    $ResultadoLAST= mysqli_query($Conexion, $ConsultaLAST);
   }
catch (Exception $e)
     { $Mensaje="No se pudo eliminar el proyecto con codigo:";
        //$error=$e->getMessage();
        //Print $e->getMessage();
        //print $Resultado();
     }
if($ResultadoLAST ==FALSE) { $Mensaje="No se pudo eliminar el proyecto con codigo:".$CodigoProyecto;
                 //die($mysqli_error($Conexion));  
            }
    else { $Mensaje="Se elimino el proyecto con codigo: ".$CodigoProyecto;
        }
        echo $Mensaje;
    }//Fin si externo 
?>