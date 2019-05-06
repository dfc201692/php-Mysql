<?php include 'conexion.php';?>
<html>
<head>
<title></title>
</head>
<body>
  <h1>FORMULARIO PARA INSERTAR DATOS A SQL</h1><BR>
<form action="guardar.php" method="post">
  <input type="text" name="nombre" placeholder="nombre alumno"><br>
  <input type="text" name="paterno" placeholder="paterno"><br>
  <input type="text" name="materno" placeholder="materno"><br>
  <input type="submit" value="Guardar"><br><br>
</form>

<table border="1">
  <th>id</th>
  <th>nombre</th>
  <th>paterno</th>
  <th>materno</th>
  <td></td>
  <td></td>

<?php
$sel = $con -> query("SELECT * FROM alumnos");
while ($fila = $sel -> fetch_assoc()){
?>
<tr>
  <td><?php echo $fila['id'] ?></td>
  <td><?php echo $fila['nombre'] ?></td>
  <td><?php echo $fila['paterno'] ?></td>
  <td><?php echo $fila['materno'] ?></td>
  <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a></td>
  <td><a href="borar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>

</tr>
<?php } ?>
</table>
</body>
</html>
