<!-- idsocio 	nombreSocio 	fotoSocio 	sexo 	tipoMembresia 	telefono 	fechaNacimiento -->
<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        /* $usuario = $_SESSION['username']; */
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Crew - Registrar proveedor</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" type="text/css" href="includes/sidebar/sidebar.css">
    <script type="text/javascript" src="includes/sidebar/sidebar.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="includes/tabla/tabla-socios.css" rel="stylesheet" type="text/css" />
    
    <script src="../scripts/menu.js" defer></script>  
    <script src="../scripts/carrito.js" defer></script>
</head>
<body>
<?php include('includes/sidebar/sidebar.php');?>
    <div id ="main">
    <!-- Navegación del la página -->
        <div class="nav-contenedor">
            <nav>
                <div class="logo">
                    <h2>Muscle Crew</h2>
                </div>
                <h2 id="menu-boton">&#9776;</h2>
                <ul id="menu">

                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            $usuario = $_SESSION['usuario'];

                            echo '<li><a href="index.php">Inicio</a></li>';
                            
                        }
                        else {
                            echo ''; 
                        }
                    ?>
              
                </ul>
            </nav>
        </div>
        <!-- Fin navegación -->

    <main>   
        
    <div class="formulario-div">
        <div class="header-form">
            <h2><b>Añadir Proveedor</b></h2>
        </div> 
        <form action="agregar-proveedor.php" method="post" enctype="multipart/form-data">

            <label for="nombre" id="lbNombre">Proveedor:</label>
            <input type="text" placeholder="Proveedor" id="nombre" name="nombre">

            <label for="contacto" id="lbContacto">Contacto:</label>
            <input type="text" placeholder="Nombre" id="contacto" name="contacto">

            <label for="direccion" id="lbDireccion">Direccion:</label>
            <input type="text" placeholder="Av. Insurgentes" id="direccion" name="direccion">

            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" placeholder="+XXX XXX XX XX">

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="empresa@ejemplo.com">


                <input type="submit" value="Registrar" class="boton" style="margin: 10px;">            
                <input type="reset" value="Borrar" class="boton" style="margin: 10px;">

        </form>
        </div>    
    </main>
    <?php
        include('includes/pie.php');
    ?>