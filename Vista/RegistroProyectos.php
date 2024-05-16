<?php
include("Navegacion.php");
echo "<h1>REGISTRAR PROYECTOS</h1>";
include ("../controlador/RegistrarProyectos.php");
echo'<form action="RegistroProyectos.php" method="post">
  <label for="text">Codigo de proyecto:</label>
  <input type="number" name="CodigoProyecto" id="codigo"><br>
  <label for="NombreProyecto">Nombre de Proyecto:</label>
  <input type="text" name="NombreProyecto" id="NombreProyecto"><br>
  <label for="Resumen">Resumen:</label> 
  <textarea name="Resumen" id="Resumen" rows="5" cols="20"></textarea><br>
  <label for="FechaRegistro">Fecha registro:</label>
  <input type="date" name="FechaRegistro" id="FechaRegistro"><br>
  <button type="sublmit">Registrar proyecto:</button>
  </form>';
include("Footer.php");
?>