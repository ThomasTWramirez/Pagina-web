<?php

if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["Especialidad"]) && !empty($_POST["Proyecto"])){
    $CodigoEstudiante = $_POST["CodigoEstudiante"];
    $PrimerNombre = $_POST["PrimerNombre"];
    $SegundoNombre = $_POST["SegundoNombre"];
    $PrimerApellido = $_POST["PrimerApellido"];
    $SegundoApellido = $_POST["SegundoApellido"];
    $Curso = $_POST["Curso"];
    $Especialidad = $_POST["Especialidad"];
    $Proyecto = $_POST["Proyecto"];
    $FechaNacimiento = $_POST["FechaNacimiento"];
                               
    include("bd.php");                              
    $Consulta= "INSERT INTO estudiante (CodigoEstudiante, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Curso, CodigoEspecialidad, CodigoProyecto, FechaNacimiento) VALUES ('".$CodigoEstudiante."', '".$PrimerNombre."', '".$SegundoNombre."', '".$PrimerApellido."', '".$SegundoApellido."', '".$Curso."', '".$Especialidad."', '".$Proyecto."', '".$FechaNacimiento."')"; 
    
    //echo $Consulta;
                                  
    $Resultado=false;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
       }
    catch (Exception $e)
         { $Mensaje="No se pudo registrar el estudiante por error en los datos";
            //$error=$e->getMessage();
            Print $e->getMessage();
            //print $Resultado();
         }
    if($Resultado ==FALSE) { $Mensaje="No se pudo registrar el estudiante";
                     //die($mysqli_error($Conexion));  
                }
    else { $Mensaje="El estudiante se registro correctamente"; }
}
    
else {
    $Mensaje="El codigo, El primer nombre, El primer apellido, El curso, La especialidad, El proyecto son obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>"; 
                               
?>