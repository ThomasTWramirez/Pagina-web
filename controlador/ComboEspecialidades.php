<?php
include("bd.php");

$ConsultaESP="SELECT * FROM especialidad";

$ResultadoESP=false;
    try {
        $ResultadoESP= mysqli_query($Conexion, $ConsultaESP);
       }
    catch (Exception $e)
         { $Mensaje="No se pudo registrar el estudiante por error en los datos";
            //$error=$e->getMessage();
            Print $e->getMessage();
            //print $Resultado();
         }
    if($ResultadoESP ==FALSE) { $Mensaje="No se pudo registrar el estudiante";
                     //die($mysqli_error($Conexion));  
                }
    else { 
        echo '<select name="Especialidad" id="Especialidad">';
        while($RegistroESP=$ResultadoESP->fetch_assoc()){
            if ($Registro["CodigoEspecialidad"]==$RegistroESP["CodigoEspecialidad"]) {
                echo '<option value="'.$RegistroESP["CodigoEspecialidad"].'"selected>'.$RegistroESP["NombreEspecialidad"].'</option>';   
            } 
        else {echo '<option value="'.$RegistroESP["CodigoEspecialidad"].'">'.$RegistroESP["NombreEspecialidad"].'</option>';}
        } // Fin del ciclo del listado de especialidades
        echo '</select>';
    }
    






?>