<?php
include('bd/link.php');

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$modelo_auto=$_POST['modelo_auto'];
$servicio=$_POST['servicio'];
$fecha_cita=$_POST['fecha_cita'];
$hora_cita=$_POST['hora_cita'];
$comentario=$_POST['comentario'];
$fecha_registro=date("Y-m-d | H:i:s a");


$sql = "INSERT INTO citas (nombre,apellidos,telefono,modelo_auto,servicio,fecha_cita,hora_cita,comentario,fecha_registro) 
	VALUES ('$nombre','$apellidos','$telefono','$modelo_auto','$servicio','$fecha_cita','$hora_cita','$comentario','$fecha_registro')";

if (mysqli_query($link, $sql)) {
    echo'<script type="text/javascript">
    alert(" Cita agendada correctamente :) ");
    window.location.href="formulario-cita.php";
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?> 