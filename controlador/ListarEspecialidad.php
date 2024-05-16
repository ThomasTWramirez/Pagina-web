<?php

include("bd.php");

$Consulta="select * from especialidad";

$Resultado=false;
   

    try {
    $Resultado= mysqli_query($Conexion, $Consulta);
       }
       catch (exception $e)
       { $Mensaje="No se pudo registrar la especialidad por error en los datos";
          //$error=$e->getMessage();
          //Print $e->getMessage();
          //print $Resultado();
       }
  if($Resultado ==FALSE) { $Mensaje="No se pudo registrar la especialidad";
                   //die($mysqli_error($Conexion));  
              }
    else { 
        echo '<table border="1">
        <tr>
            <td>Codigo de especialidad</td>
            <td>Nombre de la especialidad</td>
            <td colspan="2">Acciones</td>
        </tr>';
        while($Registro=$Resultado->fetch_assoc()){
            echo'
            <tr>
                <td>'.$Registro["CodigoEspecialidad"].'</td>
                <td>'.$Registro["NombreEspecialidad"].'</td>
                <td><a href="ActualizacionEspecialidad.php?CodigoEspecialidad='.$Registro["CodigoEspecialidad"].'">Editar</a></td>
                <td><a href="#" onclick="Preguntar('.$Registro["CodigoEspecialidad"].')">Eliminar</a></td>
            </tr>';
        } // Fin del ciclo del listado de especialidades
        echo '</table>';
    }

    
?>
<script type="text/javascript">
    function Preguntar(CodigoEspecialidad)
    {
        if(confirm("¿Esta seguro de eliminar la especialidad con codigo "+CodigoEspecialidad+"?"))
        {
            window.location.href = "Especialidades.php? CodigoEspecialidad="+CodigoEspecialidad;
        }
    }  
</script>