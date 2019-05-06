<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$ins = $con -> query("INSERT INTO alumnos (id,nombre, paterno, materno)values ('','$nombre','$paterno','$materno')");
if ($ins) {
    echo "GUARDO";
  }else {
    echo "NO GUARDO";
  }

 ?>
