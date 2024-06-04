<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR USUARIO</title>
    <?php include('layout/header.php') ?>
    <?php include('bd/link.php')?>
</head>
<body>

<?php
	if (!$_SESSION['role_usuario']==2){
		header("location:index.php#servicios");
		}
?>



<h1 class="text-success">INGRESE LOS DATOS DEL USUARIO A CREEAR</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            
            <form action="insert_usuario.php" method="post" id="formulario" required>

<div class="form-group"> <!-- Nombre -->
    <label for="nombre" class="control-label">Nombre(s)</label>
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

<div class="form-group"> <!-- Contacto 2-->
    <label for="telefonodos" class="control-label">Otro numero de contacto</label>
    <input type="text" class="form-control" name="telefonodos" placeholder="Familiar, Amigo.. etc">
</div>

<div class="form-group"> <!-- Direccion -->
    <label for="direccion" class="control-label">Dirección</label>
    <input type="text" class="form-control" name="direccion" placeholder="Colonia, Fracc, etc" required>
</div>

<div class="form-group"> <!-- Matricula -->
    <label for="matricula" class="control-label">Matricula</label>
    <input type="text" class="form-control" name="matricula" placeholder="Matricula del vehiculo" required>
</div>

<div class="form-group"> <!-- Modelo del auto -->
    <label for="modelo_auto" class="control-label">Modelo de su auto</label>
    <input type="text" class="form-control" name="modelo_auto" placeholder="Versa-20220" required>
</div>

<div class="form-group"> <!-- Descripcion -->
    <label for="descripcion" class="control-label">Descripcion de los servicios</label>
    <input type="text" class="form-control" name="descripcion" placeholder="Que se le esta haciendo al auto?" required>
</div>


<div class="form-group"> <!-- evidencias -->
    <label for="evidencias" class="control-label">evidencias de los servicios</label>
    <input type="text" class="form-control" name="evidencias" placeholder="evidencias">
</div>

<div class="form-group"> <!-- Dia de entrada -->
    <label for="fecha_entrada" class="control-label">Fecha de entrada al taller</label>
    <input type="date" class="form-control" name="fecha_entrada" placeholder="Seleccione el dia de entrada" required>
</div> 

<div class="form-group"> <!-- Dia de salida -->
    <label for="fecha_salida" class="control-label">Fecha de cita del taller (Si ya salio el auto) </label>
    <input type="date" class="form-control" name="fecha_salida" placeholder="Seleccione el dia de salida">
</div> 

<div class="form-group"> <!--Estado del vehiculo -->
			<label for="servicio">Seleccione el estado del vehiculo</label>
			<select class="form-control" name="estado" id="id_servicio" required>
				
				<option value="">Presione para ver los estados</option>
				<?php
					$sql_estados="SELECT * FROM estado_auto order by id ASC";
						$result = mysqli_query($link, $sql_estados);
						while($row = mysqli_fetch_assoc($result)) {
				?>	
      				<option value="<?=$row['id']?>"><?=$row['estado']?></option>
      			<?php } ?>
    			</select>
  		</div>


          <h3 class="text-success">INGRESE LOS DATOS PARA ACCEDER A LA PLATAFORMA</h3>

 <div class="form-group"> <!-- Nombre de usuario -->
    <label for="usuario" class="control-label">Nombre de usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Ingrese las placas del usuario">
</div> 

<div class="form-group"> <!-- Contraseña -->
    <label for="password_usuario" class="control-label">Contraseña</label>
    <input type="password" class="form-control" name="password_usuario" placeholder="La contraseña son las placas">
</div>

<div class="form-group"> <!-- role -->
			<label for="servicio">Seleccione el tipo de usuario</label>
			<select class="form-control" name="role_usuario" id="id_servicio" required>
				
				<option value="">Presione para ver los tipos de usuario</option>
				<?php
					$sql_roles="SELECT * FROM roles order by id ASC";
						$result = mysqli_query($link, $sql_roles);
						while($row = mysqli_fetch_assoc($result)) {
				?>	
      				<option value="<?=$row['id']?>"><?=$row['role']?></option>
      			<?php } ?>
    			</select>
  		</div>


<br>
<div class="form-group"> <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">CREAR USUARIO</button>
</div>   
<br>  

</form>           
            

        </div>
    </div>
</div>


    
</body>
</html>