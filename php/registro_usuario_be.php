<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena); //encriptado de la contraseña


    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
    VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


    //veriicar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta nuevamente");
                window.location = "../login.php";
            </script> 
        ';
        exit();
    }
     //veriicar que el usuario no se repita en la base de datos
     $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

     if(mysqli_num_rows($verificar_usuario) > 0){
         echo '
             <script>
                 alert("Este usuario ya existe, intenta nuevamente");
                 window.location = "../login.php";
             </script>
         ';
         exit();
     }
 

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script>
            alert("Registro Exitoso");
            window.location = "../login.php";
        </script>';
    }else{
        echo '<script>
            alert("Intente Nuevamente, usuario no registrado");
            window.location = "../login.php";
        </script>';
    }

    mysqli_close($conexion);

?>