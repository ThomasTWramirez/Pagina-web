<?php
include("Navegacion.php");
echo "<h1>ACTUALIZAR PROYECTOS</h1>";
    include("../controlador/ActualizarProyecto.php");
    echo '<form action="ActualizacionProyecto.php" method="post">
       
    <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoProyecto"].'">
        <label for="CodigoProyecto">Codigo Proyecto:</label>
        <?php //echo $Registro["CodigoProyecto"] ?>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto" value="'.$Registro["CodigoProyecto"].'"><BR>
        
        <label for="NombreProyecto">Nombre del Proyecto:</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto" value="'.$Registro["NombreProyecto"].'"><br>
        <label for="Resumen">Resumen:</label>
        <input type="text" name="Resumen" id="Resumen" value="'.$Registro["Resumen"].'"><br>
        <label for="FechaRegistro">Fecha de Registro:</label>
        <input type="text" name="FechaRegistro" id="FechaRegistro" value="'.$Registro["FechaRegistro"].'"><br>
        <button type="submit">Actualizar Proyecto</button>
    </form>';
    include("Footer.php");
    ?>   