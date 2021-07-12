<?php
    include('includes/utileria.php');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Crew - Código de Barras</title>

    <!-- Bottstrap individual -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css"> <!-- Aqui tambien -->
    <link rel="stylesheet" href="../css/versocios.css"> <!-- Podria estar aqui -->
    <link rel="stylesheet" type="text/css" href="includes/sidebar/sidebar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="includes/tabla/tabla-socios.css" rel="stylesheet" type="text/css" />

	<script src="../JsBarcode.all.min.js"></script>

    <script type="text/javascript" src="includes/sidebar/sidebar.js" defer></script>

</head>
<body>
<?php include('includes/sidebar/sidebar.php');?>
    <div id ="main">
    <!-- Navegación del la página -->
        <div class="nav-contenedor">
            <nav>
                <div class="logo">
                    <h2>Muscle Crew - Código de Barras</h2>
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


<div class="seccion-inicio">
    <?php include('includes/code-bar/codeBar.php');?>
</div>

  
