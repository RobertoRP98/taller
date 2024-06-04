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
		<h1>Usuarios Registrados</h1>
	
	<?php
		$sql="SELECT * FROM usuarios order by id DESC";
			$result = mysqli_query($link, $sql);
			if (mysqli_num_rows($result) > 0) {
	?>	
	<table id="tabla_datos" class="table table-bordered">
		<tr>
			<th>Id </th>
			<th>Nombre </th>
			<th>Telefono</th>
			<th>Telefono 2</th>
			<th>Direccion</th>
			<th>Matricula</th>
			<th>Modelo del auto</th>
			<th>Descripcion</th>
			<th>Evidencias</th>
			<th>Fecha de entrada</th>
			<th>Fecha de salida</th>
			<th>Estado</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Rol</th>
			<th>Opciones</th>

		</tr>

        
		<?php 
    		while($row = mysqli_fetch_assoc($result)) {	
    			$newFecha_entrada = date("d/m/Y", strtotime($row["fecha_entrada"]));
    			$newFecha_salida = date("d/m/Y", strtotime($row["fecha_salida"]));

		?>
		<tr>


			<td><?=$row["id"]?></td>


			<td><?=$row["nombre"]." ".$row["apellidos"]?><br>
				<small><em>Fecha registro: <?=$row["fecha_registro"]?></em></small>
			</td>

			<td><?=$row["telefono"]?></td>

			<td><?=$row["telefonodos"]?></td>
			<td><?=$row["direccion"]?></td>
			<td><?=$row["matricula"]?></td>
			<td><?=$row["modelo_auto"]?></td>
			<td><?=$row["descripcion"]?></td>
			<td><?=$row["evidencias"]?></td>
            <td><?=$newFecha_entrada?></td>
            <td><?=$newFecha_salida?></td>	
            <td><?php switch($row["estado"]){
				case 1:
					echo "EN MANTENIMIENTO";
					break;
					case 2:
						echo "FINALIZADO";
						break;
			}?></td>

			<td><?=$row["usuario"]?></td>
			<td><?=$row["password_usuario"]?></td>
            <td><?php switch($row["role_usuario"]){
				case 1:
					echo "usuario";
					break;
					case 2:
						echo "administrador";
						break;
			}?></td>

			<!-- ?id= Se usa para pasar por get una variable de nombre id y despues del signo = se coloca el valor de la variable, en este caso se tomará de la variable $row['id'] -->
			<td><a class="btn btn-warning" href="usuarios-update.php?id=<?=$row['id']?>">Editar</a> 
				<a class="btn btn-danger" href="usuarios-delete.php?id=<?=$row['id']?>">Borrar</a></td>
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
	<a class="btn btn-success" href="crear-usuario.php">Crear usuario</a>

	</div> <!-- Cierre del container-->	
	
<script type="text/javascript" src="cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#tabla_datos').DataTable();
} );
</script>
    

</body>
</html>
    

