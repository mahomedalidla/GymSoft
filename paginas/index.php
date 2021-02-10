
<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Crew</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/verpostres.css">
    <link rel="stylesheet" href="../css/versocios.css">
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
                            
                            echo '<li><a href="#">Bienvenido ' . "$usuario". '</a></li>';

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

            <!--Sección de inicio-->
            <section class="seccion-inicio" id="inicio">

                <div class="tarjeta-inicio">
                    <h1>Muscle <span>Crew</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, beatae?</p>
                    <!-- <button class="boton">Ver Postres</button> -->
                    <a href="verpostres.php" class="boton">Ver Postres</a>
                </div>

                <div class="img-contenedor">

                    <!-- <script src="../scripts/carrusel.js" defer></script>  

                    <div class="carrusel">
                        <img src="../imagenes/pastel.png" alt="">
                        <img src="../imagenes/pastel.png" alt="">
                        <img src="../imagenes/pastel.png" alt="">
                        <img src="../imagenes/pastel.png" alt="">
                        <img src="../imagenes/pastel.png" alt="">
                    </div>
                    
                    <div class="contenedor-nav-img">
                        <ul class="navegador-img">
                            <li class="carrusel-btn">&#8718;</li>
                            <li class="carrusel-btn">&#8718;</li>
                            <li class="carrusel-btn">&#8718;</li>
                            <li class="carrusel-btn">&#8718;</li>
                            <li class="carrusel-btn">&#8718;</li>
                        </ul>
                    </div> -->

                </div>

            </section>
            <!-- Fin sección de inicio-->
        </main>
            
        <?php
            include('includes/pie.php');
        ?>
    </div>
</body>
</html>