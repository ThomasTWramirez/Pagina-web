<?php

include("bd.php");

$Consulta="select * from proyecto";

$Resultado=false;
   

    try {
    $Resultado= mysqli_query($Conexion, $Consulta);
       }
    catch (Exception $e)
         { $Mensaje="No se pudo registrar el proyecto por error en los datos";
            //$error=$e->getMessage();
            //Print $e->getMessage();
            //print $Resultado();
         }
    if($Resultado ==FALSE) { $Mensaje="No se pudo consultar los proyectos";
                     //die($mysqli_error($Conexion));  
                }
    else { 
        echo '<table border="1">
        <tr>
            <td>Codigo del proyecto</td>
            <td>Nombre del proyecto</td>
            <td>Resumen</td>
            <td>Fecha de registro</td>
            <td colspan="2">Acciones</td>
            <td></td>
        </tr>';
        while($Registro=$Resultado->fetch_assoc()){
            echo'
            <tr>
                <td>'.$Registro["CodigoProyecto"].'</td>
                <td>'.$Registro["NombreProyecto"].'</td>
                <td>'.$Registro["Resumen"].'</td>
                <td>'.$Registro["FechaRegistro"].'</td>
                <td><a href="ActualizacionProyecto.php?CodigoProyecto='.$Registro["CodigoProyecto"].'" >Editar</td>
                <td><a href="#" onclick="Preguntar('.$Registro["CodigoProyecto"].')">Eliminar</td>
            </tr>';
        } // Fin del ciclo del listado de especialidades
        echo '</table>';
    }

    
?>
<script type="text/javascript">
    function Preguntar(CodigoProyecto)
    {
        if(confirm("¿Esta seguro de eliminar el proyecto con codigo "+CodigoProyecto+"?"))
        {
            window.location.href = "Proyectos.php? CodigoProyecto="+CodigoProyecto;
        }
    }  
</script>