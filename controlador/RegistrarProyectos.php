<?php
if (!empty($_POST["NombreProyecto"]) && !empty($_POST["CodigoProyecto"])){ 
    $CodigoProyecto = $_POST["CodigoProyecto"];
    $NombreProyecto = $_POST["NombreProyecto"];
    $Resumen = $_POST["Resumen"];
    $FechaRegistro = $_POST["FechaRegistro"];


    include("bd.php");
    $Consulta="INSERT INTO proyecto (CodigoProyecto, NombreProyecto, Resumen, FechaRegistro) VALUES ('".$CodigoProyecto."', '".$NombreProyecto."', '".$Resumen."', '".$FechaRegistro."');";

   //echo $Consulta;
   
    $Resultado = False;
    
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);
       }
    catch(Exception $e)
        { $Mensaje="No se pudo registrar el proyecto por error en los datos";
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje="No se pudo resgistrar el proyecto";
                    //{ die($mysqli_error($Conexion));
                     }
    else {$Mensaje = "El proyecto se registro correctamente";}
    }// Fin del if
else {
    $Mensaje="El Nombre del Proyecto, Codigo Proyecto, Resumen y Fecha son obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>"; 
?>