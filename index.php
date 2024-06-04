
<body>

<?php include ('layout/header.php')?>
 

  <!--BANNER DE BIENVENIDA-->
  <?php
  include('bd/link.php');
  $sqlbanner = "SELECT * FROM banner";
  $q1 = mysqli_query($link, $sqlbanner);
  ?>


  <div class="carousel slide" id="mainSlider" data-bs-ride="carousel">

    <div class="carousel-inner">
      <?php $var = 1;
      while ($row = mysqli_fetch_assoc($q1)) {
        if ($var == 1) {
          $status = "active";
        } else {
          $status = "";
        }
      ?>
        <div class="carousel-item  <?= $status ?>" data-bs-interval="3000">
          <img src="<?= $row['ruta'] ?>" alt="<?= $row['alt'] ?>" class="d-block w-100" />
        </div>
      <?php $var++;
      } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--NUESTROS SERVICIOS-->
  <!--BACKGROUND SERVICIOS LOGO DEL TALLER SERVICIOS EN RECTANGULOS-->
  <?php
  $sqlservicios = "SELECT * FROM servicios";
  $servicios = mysqli_query($link, $sqlservicios);

    ?>

    <section id="servicios" class="text-center">
      <!---->
      <div class="container">
        <!---->

        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center text-warning">
              CATALOGO DE NUESTROS SERVICIOS
            </h1>
          </div>
          <?php
          while ($datos = mysqli_fetch_assoc($servicios)) {
          ?>
            <div class="col-sm-12 col-lg-3">
              <!--AQUI INICIA EL CUADRO DE SERVICIO-->
              <div class="cuadro inner bg-dark">
               <a href="<?= $datos['enlace'] ?>"> <img src="<?= $datos['ruta'] ?>" alt="<?= $datos['alt'] ?>" class="img-responsive center-block" /> </a>
                <p class="servicio text-light"><?= $datos['servicio'] ?></p>
                <p class="text-light"><?= $datos['descripcion'] ?></p>
                <a href="formulario-cita.php" class="btn btn-secondary hvr-icon-forward text-light"><?= $datos['agendar'] ?></a>
              </div>
              <!--AQUI FINALIZA EL CUADRO-->
            </div>
          <?php $var++;
          } ?>
          <!--AQUI FINALIZA EL MARCO-->
        </div>
      </div>
    </section>

<?php include ('layout/footer.php')?>


  
  <script src="js/bootstrap.min.js"></script>
</body>

</html>

