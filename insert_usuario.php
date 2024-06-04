<?php
include('bd/link.php');

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
$usuario=$_POST['usuario'];
$password_usuario=$_POST['password_usuario'];
$role_usuario=$_POST['role_usuario'];
$fecha_registro=date("Y-m-d | H:i:s a");


$sql = "INSERT INTO usuarios (nombre,apellidos,telefono,telefonodos,direccion,matricula,modelo_auto,descripcion,
evidencias,fecha_entrada,fecha_salida,estado,usuario,password_usuario,role_usuario,fecha_registro) 
	VALUES ('$nombre','$apellidos','$telefono','$telefonodos','$direccion','$matricula','$modelo_auto','$descripcion',
    '$evidencias','$fecha_entrada','$fecha_salida','$estado','$usuario','$password_usuario','$role_usuario',
    '$fecha_registro')";



if (mysqli_query($link, $sql)) {
    echo'<script type="text/javascript">
    alert(" Usuario creado correctamente :) ");
    window.location.href="tabla-usuarios.php";
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?> 