<?php
include("Navegacion.php");
echo "<h1>REGISTRAR ESTUDIANTES</h1>";
include("../controlador/RegistrarEstudiantes.php");
echo'<form action="RegistroEstudiantes.php" method="post">
        <label for="CodigoEstudiante">Codigo Estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"><br>
        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre"><br>
        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre"><br>
        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido"><br>
        <label for="SegundoApellido">SegundoApellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido"><br>
        <label for="Curso">Curso:</label>
        <input type="number" name="Curso" id="Curso"><br>
        <label for="Especialidad">Especialidad</label>';
        include("../controlador/ComboEspecialidades.php"); 
        echo' <br>
        <label for="Proyecto">Proyecto</label>';
        include("../controlador/ComboProyectos.php");
        echo ' <br>
        <label for="FechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento"><br>
        <button type="submit">Registrar Estudiante</button>
    </form>';
    include("Footer.php"); 
    ?>