


<?php
// Iniciar la sesión y la conexión a bd
require_once 'conexion.php';

// Recoger datos del formulario
if(isset($_POST)){
	
			
	// Recoger datos del formulario
	$correo = trim($_POST['correo']);
    $password = $_POST['password'];
    
	
	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE correo = '$correo' and password = '$password'";
	$login = mysqli_query($db, $sql);
    
	if($login && mysqli_num_rows($login) == 1){
		
        // Utilizar una sesión para guardar los datos del usuario logueado
        $_SESSION['correo'] = $correo;
        
        echo "<script>window.location.href='home.php';</script>";
        
			
	}else{
		// mensaje de error
		echo "no";
        $_SESSION['error_login'] = "Los datos ingresados no son válidos";

        echo "<script>window.location.href='index.html';</script>";
	}
	
	exit;
        
	
}

// Redirigir al index.php
