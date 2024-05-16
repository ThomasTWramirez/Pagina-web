<?php
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR ESPECIALIDADES</h1>";
    include("../controlador/ActualizarEspecialidad.php");
    echo '<form action="ActualizacionEspecialidad.php" method="post">
    <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoEspecialidad"].'">
        <label for="CodigoEspecialidad">Codigo Especialidad</label>
        <?php //echo $Registro["CodigoEspecialidad"] ?>
        <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad" value="'.$Registro["CodigoEspecialidad"].'"><BR>
        
        <label for="NombreEspecialidad">Nombre Especialidad</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad" value="'.$Registro["NombreEspecialidad"].'"><br>

        <button type="submit">Actualizar Especialidad</button>
    </form>';
    include("Footer.php");
    ?>