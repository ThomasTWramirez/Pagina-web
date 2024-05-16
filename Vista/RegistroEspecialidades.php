<?php
  include("Navegacion.php");
  echo "<h1>REGISTRAR ESPECIALIDADES</h1>";
  include("../controlador/RegistrarEspecialidad.php");
  echo'<form action="RegistroEspecialidades.php" method="post">
        <label for="CodigoEspecialidad">Codigo Especialidad</label>
        <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad"><br>
        <label for="NombreEspecialidad">Nombre de Especialidad</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>
        <button type="submit">Registro Especialidad</button>
    </form>';
    include("Footer.php");
    ?>