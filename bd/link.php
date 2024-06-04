<?php 
$link=mysqli_connect('localhost', 'root', '', 'tallermecanico');

    if(!$link){
        die("Falló la conexion".mysqli_connect_error());

    }
    else echo "";
    
?>
