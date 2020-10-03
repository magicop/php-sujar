<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'conexion.php';

	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Recorger los valores del formulario de registro
	$correo = isset($_POST['correo']) ? mysqli_real_escape_string($db, $_POST['correo']) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

		
    // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
    $sql = "INSERT INTO usuarios(correo, password, fechacreacion) VALUES('$correo', '$password', 'null');";
    $guardar = mysqli_query($db, $sql);
    
//		var_dump(mysqli_error($db));
//		die();
    
    if($guardar){
        $_SESSION['correo'] = $correo;
        echo "<script>window.location.href='home.php';</script>";
    }else{
        echo "<script>window.location.href='registro.html';</script>";
    }
		

}


