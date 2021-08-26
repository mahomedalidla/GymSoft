
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
    <title>Muscle Crew - Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="includes/sidebar/sidebar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="icon" href="../imagenes/logo.png">


    <script type="text/javascript" src="includes/sidebar/sidebar.js" defer></script>
</head>
<body>
<?php include('includes/sidebar/sidebar.php');?>
    <div id ="main">
    <!-- Navegación del la página -->
        <div class="nav-contenedor">
            <nav>
                <div class="logo">
                
                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            $usuario = $_SESSION['usuario'];
                            echo '<div class="hola"> <p>Hola!&nbsp;</div> <div class = "usuario"><b>'  . " $usuario". '</b></div></p>';
                        }else{
                            echo '<div class="hola"> <p>Bienvenido a&nbsp;</div> <div class = "usuario"><b>Muscle Crew</b></div></p>';
                        }
                    ?>
                </div>
                <div id="clockdate">
			</div>


                <ul id="menu">

                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            $usuario = $_SESSION['usuario'];
                            
                            echo '<li class="btn-inicio"><a href="index.php">Inicio</a></li>';
                            
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
            
                <div class="img-tarjeta-inicio">
                    <img src="../img-uploaded/mc-01.png" alt="Imagen Muscle Crew">
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