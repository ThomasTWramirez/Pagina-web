<?php

include("bd.php"); 

//echo $_GET["CodigoProyecto"];

if (!empty($_GET["CodigoProyecto"])){
    $Consulta = "select * from proyecto where CodigoProyecto =".$_GET["CodigoProyecto"];
    echo $Consulta;

    $Resultado=False;
    try {     
    $Resultado= mysqli_query($Conexion, $Consulta); 
        }
   catch (Exception $e)
        { $Mensaje="No se pudo consultar el proyecto con codigo".$_GET["CodigoProyecto"]; 
            //$error=$e->getMessage();
            print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje="No se pudo consultar el proyecto con codigo".$_GET["CodigoProyecto"]; 
                   // die($mysqli_error($Conexion));
                 }
    else { $Mensaje="Se pudo consultar el proyecto con codigo".$_GET["CodigoProyecto"]; }
    $Registro=$Resultado->fetch_assoc();
} //

if (!empty($_POST["CodigoProyecto"]) && !empty($_POST["NombreProyecto"]) && !empty($_POST["Resumen"]) && !empty($_POST["FechaRegistro"])){
    $CodigoProyecto = $_POST["CodigoProyecto"];
    $NombreProyecto = $_POST["NombreProyecto"];
    $Resumen = $_POST["Resumen"];
    $FechaRegistro = $_POST["FechaRegistro"];
                               
    $Consulta= "UPDATE proyecto SET CodigoProyecto = '".$CodigoProyecto."', NombreProyecto = '".$NombreProyecto."', Resumen = '".$Resumen."', FechaRegistro = '".$FechaRegistro."' WHERE proyecto.CodigoProyecto = ".$_POST["CodigoActual"]; 
    
    echo $Consulta;
                                  
    $Resultado=false;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
       }
    catch (Exception $e)
         { $Mensaje="No se pudo actualizar el proyecto por error en los datos";
            //$error=$e->getMessage();
            Print $e->getMessage();
            //print $Resultado();
         }
    if($Resultado ==FALSE) { $Mensaje="No se pudo actualizar el proyecto";
                     //die($mysqli_error($Conexion));  
                }
    else { $Mensaje="El proyecto se actualizo correctamente"; 
         //echo $Consulta;  
        header('Location: Proyectos.php');
}
        }   
else {
    $Mensaje="el codigo, el nombre, el resumen, la fecha de registro";
    }
    echo "<h3>".$Mensaje."</h3>"; 

    //$EstudianteActualizando=$Resultado->fetch_assoc();
    //echo $EstudianteActualizando["NombreEspecialidad"];
                              
?>