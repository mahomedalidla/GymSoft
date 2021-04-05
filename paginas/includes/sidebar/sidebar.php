<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        /* $usuario = $_SESSION['username']; */
    }
?>

<?php

	
?>

<div id="sidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
	<a href="index.php" id = "logo-panel">
    	<img src="../imagenes/logo.png" alt="Logo" id="logo-img">
    	<span id="icon-text">&nbsp;&nbsp;Muscle Crew</span>
    </a><hr id = "divisor">

	<!-- Implementacion de menu dinamico en sidebar -->
                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            $usuario = $_SESSION['usuario'];
							
							echo
							'
							<a href="salir.php">
								<i class="material-icons">logout</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Salir</span>
							</a><hr>

							<a href="proceso-ventas2.php">
								<i class="material-icons">monetization_on</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Proceso de Ventas</span>
							</a> <br>

							<a href="vender.php">
								<i class="material-icons">shopping_cart</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Vender</span>
							</a> <br>
							
							<a href="registro-socio.php">
								<i class="material-icons">person_add</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Añadir socios</span>
							</a><br>
							
							<a href="ver-socios.php">
								<i class="material-icons">people</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Ver socios</span>
							</a><br>

							<a href="control-acceso/index.php" target="_blank">
								<i class="material-icons">how_to_reg</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Ventana Acceso</span>
							</a> <br> 

							<a href="code-bar.php">
								<i class="material-icons">view_week</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Codigos de Socios</span>
							</a> <br>
							
							
							<a href="control-acceso/admin/">
								<i class="material-icons">admin_panel_settings</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Panel de Control</span>
							</a> <br>
							
							 ';

							
							
                        }
                        else {
							echo
							'<a href="index.php">
								<i class="material-icons">home</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Inicio</span>
							</a><br>
							
							<a href="entrada.php">
								<i class="material-icons">login</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Ingresar</span>
							</a><br>';
                        }
						?>
    

          
</div>