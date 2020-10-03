<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'conexion.php';

	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Recorger los valores del formulario de registro
	$fecha = isset($_POST['fecha']) ? mysqli_real_escape_string($db, $_POST['fecha']) : false;
    $material = isset($_POST['material']) ? mysqli_real_escape_string($db, $_POST['material']) : false;
    $niquel = isset($_POST['niquel']) ? mysqli_real_escape_string($db, $_POST['niquel']) : false;
    $manganeso = isset($_POST['manganeso']) ? mysqli_real_escape_string($db, $_POST['manganeso']) : false;
    $oro = isset($_POST['oro']) ? mysqli_real_escape_string($db, $_POST['oro']) : false;
    $hierro = isset($_POST['hierro']) ? mysqli_real_escape_string($db, $_POST['hierro']) : false;
    $aluminio = isset($_POST['aluminio']) ? mysqli_real_escape_string($db, $_POST['aluminio']) : false;
    $peso = isset($_POST['peso']) ? mysqli_real_escape_string($db, $_POST['peso']) : false;
		
    // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
    $sql = "INSERT INTO pedidos(id, fechasolicitud, fechaentrega, material, niquel, manganeso, oro, hierro, aluminio, peso) VALUES(null, now(), '$fecha', '$material', $niquel, $manganeso, $oro, $hierro, $aluminio, $peso);";
    $guardar = mysqli_query($db, $sql);
//		var_dump(mysqli_error($db));
//		die();
    
    if($guardar){
        echo "<script>window.location.href='listar-pedidos.php';</script>";
    }else{
        echo "<script>window.location.href='agregar-pedido.php';</script>";
        
    }
		

}

