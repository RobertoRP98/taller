<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />



<?php
	session_start();


  if (!$_SESSION){ 
    ?>
  
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed d-block">
    <div class="container-fluid">
      <!--cON ESTA CLASE EL LOGO SE TIRA A LA IZQUIERDA-->
      <a class="navbar-brand text-warning col-6-md" href="index.php">
        <!--Ponemos el logo del taller-->
        <img src="imagenes/Logo.jpg" alt="" width="100px" height="100px" />
        SERVICIOS AUTOMOTRIZ PERALTA
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportContent" aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle navigation">
        <!--Dentro de este button ira el menu responsivo-->
        <!--TOGLLE NOS INDICA QUE SOLO APARECE CUANDO COLAPSA EL ID-->
        <span class="navbar-toggler-icon bg-secondary"></span>
        <!--EL ICONO DE HAMBURGUESA-->
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportContent">
        <!--Creamos una nueva capa para almacenar elementos del nav-->

        <ul class="navbar-nav ms-auto me-5">
          <!--iNTRODUCIMOS LOS ELEMENTOS-->
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="formulario-cita.php">Agendar cita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item"> 
          <a class="nav-link text-light" href="login.php"> Iniciar Sesion</a>
  
  
                  
          </li>
        </ul>
      </div>
    </div>
  </nav>


    
    

	
<?php	}else if($_SESSION['role_usuario']==1){?>
  <!--NAVBAR-->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed d-block">
    <div class="container-fluid">
      <!--cON ESTA CLASE EL LOGO SE TIRA A LA IZQUIERDA-->
      <a class="navbar-brand text-warning col-6-md" href="index.php">
        <!--Ponemos el logo del taller-->
        <img src="imagenes/Logo.jpg" alt="" width="100px" height="100px" />
        SERVICIOS AUTOMOTRIZ PERALTA
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportContent" aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle navigation">
        <!--Dentro de este button ira el menu responsivo-->
        <!--TOGLLE NOS INDICA QUE SOLO APARECE CUANDO COLAPSA EL ID-->
        <span class="navbar-toggler-icon bg-secondary"></span>
        <!--EL ICONO DE HAMBURGUESA-->
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportContent">
        <!--Creamos una nueva capa para almacenar elementos del nav-->

        <ul class="navbar-nav ms-auto me-5">
          <!--iNTRODUCIMOS LOS ELEMENTOS-->
          <li class="nav-item">
            <a class="nav-link text-light" href="miauto.php">Mi Auto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="formulario-cita.php">Agendar cita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item"> 
          <a class="nav-link text-light" href="login_exit.php"><?php echo $_SESSION['usuario'] ?>  CERRAR SESION </a>
  
  
                  
          </li>
        </ul>
      </div>
    </div>
  </nav>








    <?php	}else if($_SESSION['role_usuario']==2){?>
      
 <!--NAVBAR-->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed d-block">
    <div class="container-fluid">
      <!--cON ESTA CLASE EL LOGO SE TIRA A LA IZQUIERDA-->
      <a class="navbar-brand text-warning col-6-md" href="index.php">
        <!--Ponemos el logo del taller-->
        <img src="imagenes/Logo.jpg" alt="" width="100px" height="100px" />
        SERVICIOS AUTOMOTRIZ PERALTA
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportContent" aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle navigation">
        <!--Dentro de este button ira el menu responsivo-->
        <!--TOGLLE NOS INDICA QUE SOLO APARECE CUANDO COLAPSA EL ID-->
        <span class="navbar-toggler-icon bg-secondary"></span>
        <!--EL ICONO DE HAMBURGUESA-->
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportContent">
        <!--Creamos una nueva capa para almacenar elementos del nav-->

        <ul class="navbar-nav ms-auto me-5">
          <!--iNTRODUCIMOS LOS ELEMENTOS-->
          <li class="nav-item">
            <a class="nav-link text-light" href="tabla-autos.php">Autos del taller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="tabla-citas.php">Citas del dia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="tabla-usuarios.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="formulario-cita.php">Agendar cita</a>
          </li>
          <li class="nav-item"> 
          <a class="nav-link text-light" href="login_exit.php"><?php echo $_SESSION['usuario'] ?> CERRAR SESION</a>
  
  
                  
          </li>
        </ul>
      </div>
    </div>
  </nav>





<?php	}?>




   



 
   