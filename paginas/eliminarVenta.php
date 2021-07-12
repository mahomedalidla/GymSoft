<?php

/* autorizacion */
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM ventas WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ./ventas.php");
	exit;
}
else echo "Algo salió mal";
?>

$usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if ($usuario == "admin" && $password="123") {
        redireccionar('Bienvenido Administrador', 'index.php');
        $_SESSION['usuario'] = 'Administrador';
    }
    else { 
        redireccionar('Datos Incorrectos', 'entrada.php');
    }