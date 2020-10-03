<?php
if(isset($_POST)){

    // Conexión a la base de datos
	require_once 'conexion.php';

    $id = $_POST['id'];

    $sql = "UPDATE pedidos SET estado = 1 WHERE id = ".$id;
    $guardar = mysqli_query($db, $sql);
    
    echo "<script>window.location.href='listar-inventario.php';</script>";
}

