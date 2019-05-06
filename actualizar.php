<?php include 'conexion.php';
$id = $_REQUEST['id'];

$sel = $con -> query("SELECT * FROM alumnos WHERE id='$id' ");
if ($fila = $sel -> fetch_assoc()){
}
?>

<html>
<head>
<title></title>
</head>
<body>
  <h1>FORMULARIO PARA ACTUALIZAR DATOS A SQL</h1><BR>
<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <input type="text" name="nombre" placeholder="nombre alumno" value="<?php echo $fila['nombre']?>"><br>
  <input type="text" name="paterno" placeholder="paterno" value="<?php echo $fila['paterno']?>"><br>
  <input type="text" name="materno" placeholder="materno" value="<?php echo $fila['materno']?>"><br>
  <input type="submit" value="Actualiar"><br><br>
</form>
</body>
</html>
