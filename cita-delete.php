<?php
include('bd/link.php');

//Recibimos por GET el id del registro a borrar
$id=$_GET['id'];

// sentencia SQL para eliminar un registro
$sql = "DELETE FROM citas WHERE id=$id";

if (mysqli_query($link, $sql)) {
  echo "Registro eliminado satisfactoriamente";
  header("Location: tabla-citas.php");
} else {
  echo "Error borrando el registro: " . mysqli_error($link);
}

mysqli_close($link);
?> 