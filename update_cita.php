<?php
include('bd/link.php');

//Recibir mediante post los campos que se van a actualizar
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$modelo_auto=$_POST['modelo_auto'];
$servicio=$_POST['servicio'];
$fecha_cita=$_POST['fecha_cita'];
$hora_cita=$_POST['hora_cita'];
$comentario=$_POST['comentario'];
$fecha_registro=date("Y-m-d | H:i:s a");



$sql = "UPDATE citas SET nombre='$nombre',apellidos='$apellidos',telefono='$telefono',modelo_auto='$modelo_auto', 
servicio='$servicio',fecha_cita='$fecha_cita',hora_cita='$hora_cita',comentario='$comentario' WHERE id=$id";

if (mysqli_query($link, $sql)) {
  echo "Registro actualizado correctamente";
  header("Location: tabla-citas.php");

} else {
  echo "Error actualizando registro: " . mysqli_error($link);
}
mysqli_close($link);
?> 