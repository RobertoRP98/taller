<?php
include('bd/link.php');

//Recibir mediante post los campos que se van a actualizar
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$telefonodos=$_POST['telefonodos'];
$direccion=$_POST['direccion'];
$matricula=$_POST['matricula'];
$modelo_auto=$_POST['modelo_auto'];
$descripcion=$_POST['descripcion'];
$evidencias=$_POST['evidencias'];
$fecha_entrada=$_POST['fecha_entrada'];
$fecha_salida=$_POST['fecha_salida'];
$estado=$_POST['estado'];
$fecha_registro=date("Y-m-d | H:i:s a");



$sql = "UPDATE usuarios 
SET nombre='$nombre',apellidos='$apellidos',telefono='$telefono',telefonodos='$telefonodos',direccion='$direccion',matricula='$matricula',
modelo_auto='$modelo_auto',descripcion='$descripcion',evidencias='$evidencias',fecha_entrada='$fecha_entrada',fecha_salida='$fecha_salida',
estado='$estado' WHERE id=$id";

if (mysqli_query($link, $sql)) {
  echo "Registro actualizado correctamente";
  header("Location: tabla-autos.php");

} else {
  echo "Error actualizando registro: " . mysqli_error($link);
}
mysqli_close($link);
?> 