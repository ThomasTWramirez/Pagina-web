<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/Ramirez_php1/css/estilo.css">
</head>
<body>

<ul>
  <li><a href="/Ramirez_php1">Inicio</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Estudiante</a>
    <div class="dropdown-content">
      <a href="/Ramirez_php1/Vista/Estudiantes.php">Listar Estudiantes</a>
      <a href="/Ramirez_php1/Vista/RegistroEstudiantes.php">Registrar Estudiante</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Proyecto</a>
    <div class="dropdown-content">
      <a href="/Ramirez_php1/Vista/Proyectos.php">Listar Proyecto</a>
      <a href="/Ramirez_php1/Vista/RegistroProyectos.php">Registrar Proyecto</a>
    </div>
    </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Especialidad</a>
    <div class="dropdown-content">
      <a href="/Ramirez_php1/Vista/Especialidades.php">Listar Especialidad</a>
      <a href="/Ramirez_php1/Vista/RegistroEspecialidades.php">Registrar Especialidad</a>
    </div>
    </li>
    </ul>';
    ?>
