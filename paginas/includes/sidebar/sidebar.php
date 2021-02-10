<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        /* $usuario = $_SESSION['username']; */
    }
?>

<div id="sidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
	<a href="index.php" id = "logo-panel">
    	<img src="../imagenes/logo.png" alt="Logo" id="logo-img">
    	<span id="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Muscle Crew</span>
    </a><hr id = "divisor"><br>

	<!-- Implementacion de menu dinamico en sidebar -->
                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            $usuario = $_SESSION['usuario'];
							
							echo
							'<a href="index.php">
								<i class="material-icons">person</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;'."$usuario".'</span>
							</a><br>
							
							<a href="salir.php">
								<i class="material-icons">logout</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Salir</span>
							</a><br><hr><br>
							
							<a href="registro-socio.php">
								<i class="material-icons">person_add</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Añadir socio</span>
							</a><br>
							
							<a href="ver-socios.php">
								<i class="material-icons">people</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Socios</span>
							</a><br>
							
							<a href="#">
								<i class="material-icons">work</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Añadir proveedor</span>
							</a> <br> 
							
							<a href="#">
								<i class="material-icons">contacts</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Ver proveedor</span>
							</a> <br> 

							<a href="#">
								<i class="material-icons">local_shipping</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Añadir productos</span>
							</a> <br> 
							
							<a href="#">
								<i class="material-icons">shopping_basket</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Ver productos</span>
							</a> <br> 
							
							<a href="#">
								<i class="material-icons">admin_panel_settings</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Control de acceso</span>
							</a> <br> 
							
							<a href="#">
								<i class="material-icons">monetization_on</i>
								<span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Control de gastos</span>
							</a> <br> ';  
							
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