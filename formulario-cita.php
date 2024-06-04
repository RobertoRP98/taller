<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDAR CITA</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php include('layout/header.php') ?>
    <?php include('bd/link.php')?>
</head>
<body>


<div class="container">
            
            <form action="insert_cita.php" method="post" id="formulario" required>

<div class="form-group"> <!-- Nombre -->
    <label for="nombre" class="control-label">Nombre</label>
    <input type="text" class="form-control"  name="nombre" placeholder="Ingrese su nombre" required>
</div>    


<div class="form-group"> <!-- Apellidos -->
    <label for="apellidos" class="control-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus apellidos" required>
</div>                    
                        
<div class="form-group"> <!-- Contacto -->
    <label for="telefono" class="control-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" placeholder="993-" required>
</div>    

<div class="form-group"> <!-- Contacto -->
    <label for="telefono" class="control-label">Modelo de su auto</label>
    <input type="text" class="form-control" name="modelo_auto" placeholder="Versa-20220" required>
</div>

<div class="form-group"> <!-- Servicio -->
			<label for="servicio">Seleccione un servicio</label>
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
    <input type="date" class="form-control" name="fecha_cita" placeholder="Seleccione un dia habil" required>
</div> 


<div class="form-group"> <!-- Hora cita -->
			<label for="Hora_cita">Hora de su cita</label>
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
    <input type="textarea" class="form-control" name="comentario" placeholder="Algo que quieras decirnos de tu auto?">
</div> 


<br>
<div class="form-group"> <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Agendar cita</button>
</div>   
<br>  

</form>           
            


</div>






<?php include('layout/footer.php') ?>

    
</body>
</html>