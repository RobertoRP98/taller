<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESIÓN</title>
</head>
<body>
<?php include('layout/header.php') ?>
    <?php include('bd/link.php')?>


    <section class="">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <br>
        <form action="validacion.php" method="post" id="formulario" required>


        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start text-primary">
            <p class="lead fw-normal mb-0 me-3">Iniciar sesión</p> </div>
            <br>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="usuario" class="form-control form-control-lg"
              placeholder="Ingrese su matricula" />

            <label class="form-label" for="usuario">Matricula de tu vehiculo</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password_usuario" class="form-control form-control-lg"
              placeholder="Ingrese su contraseña" />

            <label class="form-label" for="password_usuario">Contraseña</label>
          </div>

          <br>
<div class="form-group"> <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</div>   
<br>  


        </form>
      </div>
    </div>
  </div>
</section>


    

    <?php include('layout/footer.php') ?>

</body>
</html>