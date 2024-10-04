<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: web_principal.php");
    };


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login y Registro</title>
</head>

<body>
    <div class="wrap-logo-header" style ="margin-bottom:-60px;">
        <img class="logo-header" src="assets/img/logo-letra.png">
        </img>
    </div>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para entrar en la página</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de Logueo y Registro-->
            <div class="contenedor__login-register">
                <!--Logueo-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrate</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electrónico" name = "correo">
                    <input type="text" placeholder="Nombre de usuario" name = "usuario">
                    <input type="password" placeholder="Contraseña" name = "contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>

    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>
