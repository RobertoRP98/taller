<?php
include('bd/link.php');

//Recibimos por GET el id del registro a borrar
$id=$_GET['id'];

// sentencia SQL para OBTENER un registro
$sql = "SELECT * FROM usuarios WHERE id=$id";
if ($cons=mysqli_query($link, $sql)) {
	$reg=mysqli_fetch_assoc($cons);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR USUARIO  <?=$reg['nombre']?> </title>

    <link rel="stylesheet" href="css/styles.css">
    <?php include('layout/header.php') ?>
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
            
            <form action="update_usuarios.php" method="post" id="formulario" required>

			<input type="hidden" name="id" value="<?=$reg['id']?>">	


<div class="form-group"> <!-- Nombre -->
    <label for="nombre" class="control-label">Nombre(s)</label>
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

<div class="form-group"> <!-- Contacto 2-->
    <label for="telefonodos" class="control-label">Otro numero de contacto</label>
    <input type="text" class="form-control" name="telefonodos" value="<?php echo $reg['telefonodos'];?>">
</div>

<div class="form-group"> <!-- Direccion -->
    <label for="direccion" class="control-label">Dirección</label>
    <input type="text" class="form-control" name="direccion" value="<?php echo $reg['direccion'];?>" required>
</div>

<div class="form-group"> <!-- Matricula -->
    <label for="matricula" class="control-label">Matricula</label>
    <input type="text" class="form-control" name="matricula" value="<?php echo $reg['matricula'];?>" required>
</div>

<div class="form-group"> <!-- Modelo del auto -->
    <label for="modelo_auto" class="control-label">Modelo de su auto</label>
    <input type="text" class="form-control" name="modelo_auto" value="<?php echo $reg['modelo_auto'];?>" required>
</div>

<div class="form-group"> <!-- Descripcion -->
    <label for="descripcion" class="control-label">Descripcion de los servicios</label>
    <input type="text" class="form-control" name="descripcion" value="<?php echo $reg['descripcion'];?>" required>
</div>


<div class="form-group"> <!-- evidencias -->
    <label for="evidencias" class="control-label">evidencias de los servicios</label>
    <input type="text" class="form-control" name="evidencias" value="<?php echo $reg['evidencias'];?>">
</div>

<div class="form-group"> <!-- Dia de entrada -->
    <label for="fecha_entrada" class="control-label">Fecha de entrada al taller</label>
    <input type="date" class="form-control" name="fecha_entrada" value="<?php echo $reg['fecha_entrada'];?>" required>
</div> 

<div class="form-group"> <!-- Dia de salida -->
    <label for="fecha_salida" class="control-label">Fecha de cita del taller (Si ya salio el auto) </label>
    <input type="date" class="form-control" name="fecha_salida" value="<?php echo $reg['fecha_salida'];?>">
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
    <input type="text" class="form-control" name="usuario" value="<?php echo $reg['usuario'];?>" required>
</div> 

<div class="form-group"> <!-- Contraseña -->
    <label for="password_usuario" class="control-label">Contraseña</label>
    <input type="password" class="form-control" name="password_usuario" value="<?php echo $reg['password_usuario'];?>" required>
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
    <button type="submit" class="btn btn-primary">ACTUALIZAR USUARIO</button>
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