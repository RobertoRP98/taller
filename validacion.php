<?php
	session_start();
	sleep(3);
	include('bd/link.php');

	$usuario=$_POST['usuario'];
	$password_usuario=$_POST['password_usuario'];

	$sql = "SELECT id,usuario,role_usuario,telefono 
			From usuarios 
			where usuario='$usuario' AND password_usuario='$password_usuario' ";
	
	$resultado = mysqli_query($link, $sql);

	if(1== mysqli_num_rows($resultado)){
		$linea= mysqli_fetch_array($resultado);

		$id=$linea[0];
		$usuario=$linea[1];
		$role_usuario = $linea [2];
		$telefono=$linea[3];
		
		$_SESSION['id']=$id;
		$_SESSION['usuario']=$usuario;
		$_SESSION['role_usuario'] = $role_usuario;
		$_SESSION['telefono']=$telefono;

        
        

		switch ($role_usuario) {
			case '1':
				header("location: index.php");
				break;
			case '2':
				header("location: tabla-citas.php");
				break;
		
		}
	}else {
		echo'<script type="text/javascript">
		alert(" USUARIO O CONTRASEÑA INCORRECTA ");
		window.location.href="login.php";
		</script>';
	}

	mysqli_close($link);
?>