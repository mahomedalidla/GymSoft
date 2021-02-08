<?php

    include('includes/utileria.php');

    session_start();
    
    if (isset($_SESSION['usuario'])) {
        redireccionar('La sesion ya fue iniciada', 'index.php');
        die();
    }
    include('includes/encabezado.php');
?>

<div class="formulario-div">
<h3>Datos</h3>
    <form action="entrar-manejo.php" method="post">
        

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Entrar" class="boton">
      
    </form>
</div>

<?php
    include('includes/pie.php');
?>