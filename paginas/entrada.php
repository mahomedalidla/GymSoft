
<?php

include('includes/utileria.php');

session_start();

if (isset($_SESSION['usuario'])) {
    redireccionar('La sesion ya fue iniciada', 'index.php');
    die();
}
include('includes/encabezado.php');
?>

<!-- prueba -->
<?php
// include('includes/utileria.php');

// session_start();
// if (isset($_SESSION['user_id'])) {
//     redireccionar('La sesion ya fue iniciada', 'index.php');
//     die();
//   }

// if (!empty($_POST['email']) && !empty($_POST['password'])) {
//     $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
//     $records->bindParam(':email', $_POST['email']);
//     $records->execute();
//     $results = $records->fetch(PDO::FETCH_ASSOC);

//     $message = '';

//     if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
//       $_SESSION['user_id'] = $results['id'];
//     } else {
//       $message = 'Sorry, those credentials do not match';
//     }
//   }
?>
<!-- Fin prueba --> 

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