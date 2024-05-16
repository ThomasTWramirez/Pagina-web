<?php
include("bd.php");

$ConsultaPYS="SELECT * FROM proyecto";

$ResultadoPYS=false;
    try {
        $ResultadoPYS= mysqli_query($Conexion, $ConsultaPYS);
       }
    catch (Exception $e)
         { $Mensaje="No se pudo registrar el proyecto por error en los datos";
            //$error=$e->getMessage();
            Print $e->getMessage();
            //print $Resultado();
         }
    if($ResultadoPYS ==FALSE) { $Mensaje="No se pudo consultar los proyectos";
                     //die($mysqli_error($Conexion));  
                }
    else { 
        echo '<select name="Proyecto" id="Proyecto">';
        while($RegistroPYS=$ResultadoPYS->fetch_assoc()){
            if ($Registro["CodigoProyecto"]==$RegistroPYS["CodigoProyecto"]) {
                echo '<option value="'.$RegistroPYS["CodigoProyecto"].'"selected>'.$RegistroPYS["NombreProyecto"].'</option>'; 
            }  
            echo '<option value="'.$RegistroPYS["CodigoProyecto"].'">'.$RegistroPYS["NombreProyecto"].'</option>';
        } // Fin del ciclo del listado de especialidades
        echo '</select>';
    }