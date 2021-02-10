<?php

    include('includes/utileria.php');

    /* include('includes/login.php'); */

    


//     if(isset($_POST['login'])){

//         // 3. Variables $_POST[]
//         $u = $_POST['nombreUsuario'];
//         $c = MD5($_POST['contrasenaUsuario']); // La función MD5() estará encriptando lo ingresado para comparar con lo guardado
    
//         if($u == "" || $_POST['clave'] == null){ // Validamos que ningún campo quede vacío
//             echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; // Se utiliza Javascript dentro de PHP
//         }else{
//             // 4. Cadena de SQL
//             $sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$u' AND contrasenaUsuario = '$c'";
    
//             // 5. Ejecuto cadena query()
//             if(!$consulta = $conexion->query($sql)){
//                 echo "ERROR: no se pudo ejecutar la consulta!";
//             } 
//             else {
//                 // 6. Cuento registros obtenidos del select. 
//                 // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
//                 $filas = mysqli_num_rows($consulta);

//                 // 7. Comparo cantidad de registros encontrados
//                 if($filas == 0){
//                     echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
//                 }
//                  }

//     }
// }
    
    ////////////////////////////////////////////
    //Sacamos los valores
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if ($usuario == "admin" && $password="123") {
        redireccionar('Bienvenido Administrador', 'index.php');
        $_SESSION['usuario'] = 'Administrador';
    }
    else { 
        redireccionar('Datos Incorrectos', 'entrada.php');
    }

?>