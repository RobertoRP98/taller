<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI AUTO</title>
	<link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
 
</head>
<body>
<?php include('bd/link.php');?>
<?php include ('layout/header.php')?>

<div class="container"> <!-- Apertura del container-->
		<h1>¿COMO VA MI AUTO?</h1>

<?php 
$datos_tabla=$_SESSION['usuario'];
//var_dump($datos_tabla);
$sqla = "SELECT *
 FROM usuarios 
 WHERE matricula='$datos_tabla'";
	$resultado = mysqli_query($link, $sqla);
	//var_dump($resultado);
	if(1== mysqli_num_rows($resultado)){ 
		$linea= mysqli_fetch_array($resultado);  ?>


<table id="tabla_datos" class="table table-bordered">
		<tr>
			<th>Nombre </th>
			<th>Matricula </th>
			<th>Modelo del auto</th>
			<th>Fecha de entrada</th>
			<th>Servicios realizados</th>

			<th>Evidencia</th>
			<th>Estado</th>
			<th>Fecha de salida</th>
		</tr>
	
		<tr>

			<td><?=$linea["nombre"]." ".$linea["apellidos"]?><br>
			</td>

			<td><?=$linea["matricula"]?></td>

			<td><?=$linea["modelo_auto"]?></td>
			<td><?=$linea["fecha_entrada"]?></td>
			<td><?=$linea["descripcion"]?></td>
			<td><?=$linea["evidencias"]?></td>




			<td><?php switch($linea["estado"]){
				case 1:
					echo "EN MANTENIMIENTO";
					break;
					case 2:
						echo "FINALIZADO";
						break;

				}?></td>

		


			<td><?=$linea["fecha_salida"]?></td>

			


			<!-- ?id= Se usa para pasar por get una variable de nombre id y despues del signo = se coloca el valor de la variable, en este caso se tomará de la variable $row['id'] -->
		
	</table>
		<?php
			} 
			else {
    		echo '<script type="text/javascript">
			alert(" NECESITA INICIAR SESIÓN ");
			window.location.href="login.php";
			</script>';;
			}

			mysqli_close($link);

		?>
	<a class="btn btn-success" href="formulario-cita.php">AGENDAR UNA NUEVA CITA</a>

	</div> <!-- Cierre del container-->	

	
	













</body>
</html>


