<?php include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$up = $con -> query("UPDATE alumnos SET nombre='$nombre', paterno='$paterno', materno='$materno' WHERE id='$id' ");
if ($up) {
  echo "<script>
  location.href='formulario.php';
  </script>";
  echo "guardo";
}else{
  echo "<script>
  location.href='actualizar.php?id=".$id."';
  </script>";
  echo "no guarda";
}
 ?>
