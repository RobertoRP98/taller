<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio | Balanceo </title>
</head>

<body>
    <?php include('layout/header.php') ?>
    <?php include('bd/link.php')?>

    <?php $pagservicios="SELECT * FROM paginaservicios WHERE id=4" ;
          $dataservicios=mysqli_query($link,$pagservicios);
          $data = mysqli_fetch_assoc($dataservicios)  
        ?>



    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><?= $data['titulo'] ?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="<?= $data['ruta'] ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4><?= $data['subtitulo'] ?></h4>
                        <p > <?= $data['descripcion1'] ?> </p>
                        <p > <?= $data['descripcion2'] ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('layout/footer.php') ?>


</body>

</html>