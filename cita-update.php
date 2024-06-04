<?php
include('bd/link.php');

//Recibimos por GET el id del registro a borrar
$id=$_GET['id'];

// sentencia SQL para OBTENER un registro
$sql = "SELECT * FROM citas WHERE id=$id";
if ($cons=mysqli_query($link, $sql)) {
	$reg=mysqli_fetch_assoc($cons);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR CITA  <?=$reg['nombre']?> </title>
    <link rel="stylesheet" href="css/styles.css">
    <?php include('layout/header.php') ?>
</head>
<body>

<?php
	if (!$_SESSION['role_usuario']==2){
		header("location:index.php#servicios");
		}
?>

    
<div class="container">
    <div class="row">
        <div class="col-md-6">
            
            <form action="update_cita.php" method="post" id="formulario" required>

			<input type="hidden" name="id" value="<?=$reg['id']?>">	

<div class="form-group"> <!-- Nombre -->
    <label for="nombre" class="control-label">Nombre</label>
    <input type="text" class="form-control"  name="nombre" value="<?php echo $reg['nombre'];?>" required>
</div>    


<div class="form-group"> <!-- Apellidos -->
    <label for="apellidos" class="control-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" value="<?php echo $reg['apellidos'];?>" required>
</div>                    
                        
<div class="form-group"> <!-- Contacto -->
    <label for="telefono" class="control-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" value="<?php echo $reg['telefono'];?>" required>
</div>    

<div class="form-group"> <!-- Contacto -->
    <label for="telefono" class="control-label">Modelo del auto</label>
    <input type="text" class="form-control" name="modelo_auto" value="<?php echo $reg['modelo_auto'];?>" required>
</div>   

<div class="form-group"> <!-- Servicio -->
			<label for="servicio">VERIFIQUE EL SERVICIO</label>
			<select class="form-control" name="servicio" id="id_servicio" required>
				
				<option value="">Presione para ver los servicios</option>
				<?php
					$sql_servicios="SELECT * FROM servicios_cita order by id ASC";
						$result = mysqli_query($link, $sql_servicios);
						while($row = mysqli_fetch_assoc($result)) {
				?>	
      				<option value="<?=$row['id']?>"><?=$row['servicio']?></option>

      			<?php } ?>
    			</select>
  		</div>

<div class="form-group"> <!-- Dia cita -->
    <label for="dia_cita" class="control-label">Fecha de cita</label>
    <input type="date" class="form-control" name="fecha_cita" value="<?php echo $reg['fecha_cita'];?>" required>
</div> 


<div class="form-group"> <!-- Hora cita -->
			<label for="Hora_cita">VERIFIQUE LA HORA DE LA CITA</label>
			<select class="form-control" name="hora_cita" id="id" required>
				
				<option value="">Presione para ver los horarios disponibles</option>
				<?php
					$sql_horas="SELECT * FROM hora_cita order by id ASC";
						$result = mysqli_query($link, $sql_horas);
						while($row = mysqli_fetch_assoc($result)) {
				?>	
      				<option value="<?=$row['id']?>"><?=$row['hora']?></option>

      			<?php } ?>
    			</select>
  		</div>

 <div class="form-group"> <!-- Comentario -->
    <label for="Comentario" class="control-label">Comentario</label>
    <input type="textarea" class="form-control" name="comentario" value="<?php echo $reg['comentario'];?>">
</div> 


<br>
<div class="form-group"> <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
</div>   
<br>  

</form>           
            

        </div>
    </div>
</div>



</body>
</html>
<?php }
mysqli_close($link);
?>