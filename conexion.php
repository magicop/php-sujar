<?php
// ConexiÃ³n
$servidor = 'localhost';
$usuario = 'kodingcl_sujar';
$password = 'sujar123';
$basededatos = 'kodingcl_koding';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuraci¨®n: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuraci¨®n: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
    mysqli_query($db, "SET NAMES 'utf8'");

    // Check connection
    
    
    // Iniciar la sesi¨®n
    if(!isset($_SESSION)){
    	session_start();
    }
}

