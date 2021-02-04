
<?php
    include('includes/utileria.php');

    session_start();

    if(isset($_SESSION['usuario'])) {
        session_unset();
        session_destroy();
        redireccionar('Cerrando sesion', 'index.php');
    }
    else {
        redireccionar('Aun no inicias sesion', 'entrada.php'); 
    }

?>