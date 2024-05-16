<?php

include("bd.php"); 

//echo $_GET["CodigoEspecialidad"];

if (!empty($_GET["CodigoEspecialidad"])){
    $Consulta = "select * from especialidad where CodigoEspecialidad =".$_GET["CodigoEspecialidad"];
   // echo $Consulta;

    $Resultado=False;
    try {     
    $Resultado= mysqli_query($Conexion, $Consulta); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo consultar la especialidad con codigo".$_GET["CodigoEspecialidad"]; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje="No se pudo consultar la especialidad con codigo".$_GET["CodigoEspecialidad"]; 
                   // die($mysqli_error($Conexion));
                 }
    else { $Mensaje="Se pudo consultar la especialidad con codigo".$_GET["CodigoEspecialidad"]; }
    $Registro=$Resultado->fetch_assoc();
} //

if (!empty($_POST["CodigoEspecialidad"]) && !empty($_POST["NombreEspecialidad"]))
{
    $CodigoEspecialidad = $_POST["CodigoEspecialidad"];
    $NombreEspecialidad = $_POST["NombreEspecialidad"];
                               
    $Consulta= "UPDATE especialidad SET CodigoEspecialidad = '".$CodigoEspecialidad."', NombreEspecialidad = '".$NombreEspecialidad."' WHERE especialidad.CodigoEspecialidad = ".$_POST["CodigoActual"]; 
    
    echo $Consulta;
                                  
    $Resultado=false;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
       }
    catch (Exception $e)
         { $Mensaje="No se pudo actualizar la especialidad por error en los datos";
            //$error=$e->getMessage();
            Print $e->getMessage();
            //print $Resultado();
         }
    if($Resultado ==FALSE) { $Mensaje="No se pudo actualizar la especialidad";
                     //die($mysqli_error($Conexion));  
                }
    else { $Mensaje="La especialidad se actualizo correctamente"; 
         //echo $Consulta;  
        header('Location: Especialidades.php');
}
        }   
else {
    $Mensaje="El codigo, El nombre";
    }
    echo "<h3>".$Mensaje."</h3>"; 

    //$EstudianteActualizando=$Resultado->fetch_assoc();
    //echo $EstudianteActualizando["NombreEspecialidad"];
                              
?>