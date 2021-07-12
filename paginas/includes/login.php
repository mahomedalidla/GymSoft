<?php
    include('includes/utileria.php');

    $conexion = conectar();

    if (!$conexion) {
        redireccionar('Error en la conexion', 'registro.php');
        return;
    }

    session_start();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "select count(*) as contar from usuarios where usuario = '$usuario' and contrasenaUsuario = '$password'";

    $resultado = mysqli_query($conexion, $sql);

    $array = mysqli_fetch_array($resultado);

    if($array['contar']>0) {
        $_SESSION['username'] = $usuario;
        redireccionar('exitoso', 'index.php');
    }else{
        echo 'datos incorrecots';
    }
?>