<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA DE CITAS AGENDADAS</title>
	<link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
	<?php include('bd/link.php');?>
    <?php include ('layout/header.php')?>	
 
</head>
<body>

<?php
	if (!$_SESSION['role_usuario']==2){
		header("location:index.php#servicios");
		}
?>

	<div class="container"> <!-- Apertura del container-->
		<h1>CITAS REGISTRADAS</h1>
	
	<?php
		$sql="SELECT * FROM citas order by id DESC";
			$result = mysqli_query($link, $sql);
			if (mysqli_num_rows($result) > 0) {
	?>	
	<table id="tabla_datos" class="table table-bordered">
		<tr>
			<th>Id </th>
			<th>Nombre </th>
			<th>Telefono</th>
			<th>Modelo del auto</th>
			<th>Servicio</th>
			<th>Fecha de cita</th>
			<th>Hora de cita</th>
			<th>Comentario</th>
			<th>Opciones</th>



		</tr>
		<?php 
    		while($row = mysqli_fetch_assoc($result)) {	
    			$newFecha = date("d/m/Y", strtotime($row["fecha_cita"]));
		?>
		<tr>


			<td><?=$row["id"]?></td>


			<td><?=$row["nombre"]." ".$row["apellidos"]?><br>
				<small><em>Fecha registro: <?=$row["fecha_registro"]?></em></small>
			</td>

			<td><?=$row["telefono"]?></td>

			<td><?=$row["modelo_auto"]?></td>

			<td><?php switch($row["servicio"]){
				case 1:
					echo "CAMBIO DE ACEITE";
					break;
					case 2:
						echo "AFINACION";
						break;
						case 3:
							echo "ALINEACION";
							break;	
							case 4:
								echo "BALANCEO";
								break;
								case 5:
									echo "DIRECCION";
									break;
									case 6:
										echo "FRENOS";
										break;
										case 7:
											echo "CAMBIO DE LLANTAS";
											break;
											case 8:
												echo "SUSPENSION";
												break;

				}?></td>

		


			<td><?=$row["fecha_cita"]?></td>

			<td><?php switch($row["hora_cita"]){
				case 1:
					echo "08:00";
					break;
					case 2:
						echo "09:00";
						break;
						case 3:
							echo "10:00";
							break;
							case 4:
								echo "11:00";
								break;
								case 5:
									echo "12:00";
									break;
									case 6:
										echo "13:00";
										break;
										
									
								

			}?></td>

			<td><?=$row["comentario"]?></td>


			<!-- ?id= Se usa para pasar por get una variable de nombre id y despues del signo = se coloca el valor de la variable, en este caso se tomará de la variable $row['id'] -->
			<td><a class="btn btn-warning" href="cita-update.php?id=<?=$row['id']?>">Editar</a> 
				<a class="btn btn-danger" href="cita-delete.php?id=<?=$row['id']?>">Borrar</a></td>
		</tr>
		<?php 
				}

		?>
	</table>
		<?php
			} 
			else {
    		echo "No existen registros";
			}

			mysqli_close($link);

		?>
	<a class="btn btn-success" href="formulario-cita.php">Crear cita</a>

	</div> <!-- Cierre del container-->	
	


</body>
</html>
    
