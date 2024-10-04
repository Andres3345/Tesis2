<?php

session_start();

if(!isset($_SESSION['usuario'])){
  echo '
    <script>
      alert("Por favor debes iniciar sesion");
      window.location = "login.php";
    </script>
  ';
  //header("location: login.php");
  die();
  session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Don Enrique - Reservas</title>
</head>
<body>


<div class="wrap-header-hero" style="background: linear-gradient(to bottom, rgb(0 0 0 / .40), rgb(0 0 0 / .75)), url(assets/img/fondo-principal.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
<header class="main-header">
<div class="header-wrap">
    <div class="wrap-logo-header">
        <img class="logo-header" src="assets/img/logo-letra.png">
        </img>
    </div>
    <div class="wrap-nav-header">
    <nav class="nav-header">
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
            <i class="toggle-menu">
                <img src="assets/img/images.png" alt="">
            </i>
        </label>
        <ul class="main-menu">
            <li class="menu-item">
                <a href="web_principal.php">Inicio</a>
            </li>
            <li class="menu-item">
                <a href="web_principal.php#Menu">Menu</a>
            </li>
        </ul>
    </nav>
    </div>
        </div>
        
        </header>

    <main>
        <section class="hero-page">
            <div class="wrap-hero-page">
                <h1 style="color: orange; text-align: center; font-family: Kanit, sans-serif; margin-bottom: -70px;">BIENVENIDO A NUESTRO SITIO DE RESERVAS</h1>
            </div>
        </section>
        <section class="section">
            <div class="wrap-two-column">
                <div class="column-half">
                    <h2 style="color: orange; text-align: center; font-family: Kanit, sans-serif;">RESERVA TU LUGAR EN DON ENRIQUE</h2>
                    <p style="color: white; font-size: 25px; font-family: Kanit, sans-serif;">Asegura tu lugar y veni a deisfrutar de las más ricas pizzas, hamburguesas, 
                      sandwiches de milanesa y lomitos, y mucho más en Don Enrique😎​.
                    </p>
                    <p style="color: white; font-size: 25px; font-family: Kanit, sans-serif;">Somos el espacio ideal para venir a disfrutar de un gran ambientem tanto para la familia,
                      como para venir a disfrutar de una charla con amigos acompañada de, porque no, una birra bien fria, 
                      GRAN AMBIENTE, BUENA MUSICA Y BUENA COMIDA, ¿QUE ESPERAS PARA VISITARNOS?
                    </p>
                        <button style=" border-radius: 10px; margin-left:480px; padding: 10px 40px; margin-top: 40px; border: none; font-size: 14px; background: orange; color: white; cursor: pointer; outline: none;">RESERVAR UNA MESA</button>
                </div>
                
            </div>
        </section>
    </main>


    <footer class="footer">
            <div class="wrap-footer">
              <div class="text-element-footer element-footer">
                <h3>Don Enrique Beer & Food</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, commodi quaerat! Impedit eaque officia nulla quidem dolore aut animi culpa.</p>
              </div>
              <div class="text-element-footer element-footer">
                <h5>Dirección</h5>
                <ul>
                  <li>Inmac. Concepcion - 449</li>
                  <li>Celular: 3863-534208</li>
                </ul>
              </div>
              <div class="text-element-footer element-footer">
                <h5>Más información</h5>
                <ul>
                  <li><a href="/">Inicio</a></li>
                  <li><a href="/">Blog</a></li>
                </ul>
              </div>
              <div class="rrss-element-footer element-footer">
                <h5>Redes Sociales</h5>
                <ul>
                  <li><a href="/">
                    <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNTEyIDc1djM2MmMwIDQxLjM5ODQzOC0zMy42MDE1NjIgNzUtNzUgNzVoLTEyMWwtMzAtMzBoLTMwbC0zMCAzMGgtMTUxYy00MS4zOTg0MzggMC03NS0zMy42MDE1NjItNzUtNzV2LTM2MmMwLTQxLjM5ODQzOCAzMy42MDE1NjItNzUgNzUtNzVoMzYyYzQxLjM5ODQzOCAwIDc1IDMzLjYwMTU2MiA3NSA3NXptMCAwIiBmaWxsPSIjNzk4NGViIi8+PHBhdGggZD0ibTUxMiA3NXYzNjJjMCA0MS4zOTg0MzgtMzMuNjAxNTYyIDc1LTc1IDc1aC0xMjFsLTMwLTMwaC0xNXYtNDgyaDE2NmM0MS4zOTg0MzggMCA3NSAzMy42MDE1NjIgNzUgNzV6bTAgMCIgZmlsbD0iIzQ2NjFkMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC05MHYtMTgyaC02MHYtOTBoNjB2LTYwYzAtMzMuMzAwNzgxIDE4LjMwMDc4MS02Mi40MDIzNDQgNDUtNzggMTMuMTk5MjE5LTcuNSAyOC44MDA3ODEtMTIgNDUtMTJoOTB2OTB6bTAgMCIgZmlsbD0iI2VjZWNmMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC00NXYtNDEwYzEzLjE5OTIxOS03LjUgMjguODAwNzgxLTEyIDQ1LTEyaDkwdjkwem0wIDAiIGZpbGw9IiNlMmUyZTciLz48L3N2Zz4=" alt="icono redes sociales">
                  </a></li>
                  
                  <li><a href="#" id="whatsapp-link">
                    <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMjU2IDBjLTE0MC42OTkyMTkgMC0yNTYgMTE1LjMwMDc4MS0yNTYgMjU2IDAgNDYuNSAxMi41OTc2NTYgOTEuNSAzNi4zMDA3ODEgMTMxLjEwMTU2MmwtMzYuMzAwNzgxIDEyNC44OTg0MzggMTI0Ljg5ODQzOC0zNi4zMDA3ODFjMzkuNjAxNTYyIDIzLjY5OTIxOSA4NC42MDE1NjIgMzYuMzAwNzgxIDEzMS4xMDE1NjIgMzYuMzAwNzgxIDE0MC42OTkyMTkgMCAyNTYtMTE1LjMwMDc4MSAyNTYtMjU2cy0xMTUuMzAwNzgxLTI1Ni0yNTYtMjU2em0wIDAiIGZpbGw9IiMwMGRkN2IiLz48cGF0aCBkPSJtNTEyIDI1NmMwIDE0MC42OTkyMTktMTE1LjMwMDc4MSAyNTYtMjU2IDI1NnYtNTEyYzE0MC42OTkyMTkgMCAyNTYgMTE1LjMwMDc4MSAyNTYgMjU2em0wIDAiIGZpbGw9IiMwMGNjNzEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0My02MS4xOTkyMTktMzcuMTk5MjE5LTExNi42OTkyMTktMTAzLjE5OTIxOS0xMzAuMTk5MjE5LTE2Mi41OTc2NTctOS4zMDA3ODEtNDAuMjAzMTI1LTQuMTk5MjE5LTc1IDktODguNWwxMi0xMmM2LjYwMTU2My02LjMwMDc4MSAxNy4wOTc2NTctNi4zMDA3ODEgMjMuNjk5MjE5IDBsNDcuNjk5MjE5IDQ3LjY5OTIxOWMzLjMwMDc4MSAzLjMwMDc4MSA1LjEwMTU2MiA3LjUgNS4xMDE1NjIgMTJzLTEuODAwNzgxIDguNjk5MjE5LTUuMTAxNTYyIDEybC0xMiAxMS42OTkyMTljLTEyLjg5ODQzOCAxMy4xOTkyMTktMTIuODk4NDM4IDM0LjUgMCA0Ny42OTkyMTlsNDkuODAwNzgxIDQ4LjkwMjM0MyAyOS4wOTc2NTYgMjguODAwNzgxYzEzLjIwMzEyNSAxMy4xOTkyMTkgMzUuNTAzOTA2IDEzLjE5OTIxOSA0OC43MDMxMjUgMGwxMS42OTkyMTktMTIuMDAzOTA2YzYuMzAwNzgxLTYgMTcuNjk5MjE5LTYgMjQgMGw0Ny42OTkyMTkgNDcuNzAzMTI1YzYuMzAwNzgxIDYuNTk3NjU3IDYuNjAxNTYyIDE3LjA5NzY1NyAwIDI0em0wIDAiIGZpbGw9IiNlY2VjZjEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0M3YtODMuMDk3NjU3bDI5LjA5NzY1NiAyOC44MDA3ODFjMTMuMjAzMTI1IDEzLjE5OTIxOSAzNS41MDM5MDYgMTMuMTk5MjE5IDQ4LjcwMzEyNSAwbDExLjY5OTIxOS0xMi4wMDM5MDZjNi4zMDA3ODEtNiAxNy42OTkyMTktNiAyNCAwbDQ3LjY5OTIxOSA0Ny43MDMxMjVjNi4zMDA3ODEgNi41OTc2NTcgNi42MDE1NjIgMTcuMDk3NjU3IDAgMjR6bTAgMCIgZmlsbD0iI2UyZTJlNyIvPjwvc3ZnPg==" alt="icono redes sociales">
                  </a></li>
                  <script>
                    document.getElementById("whatsapp-link").addEventListener("click", function(event) {
                      event.preventDefault(); // Evitar que el enlace redireccione
                    
                      // URL para enviar un mensaje a un número específico a través de la API de WhatsApp Business
                      var apiUrl = "https://api.whatsapp.com/send?phone=+543863534208&text=Buenas Noches, quiero hacer unaa reserva, gracias.";
                    
                      // Abre la ventana de WhatsApp en una nueva pestaña
                      window.open(apiUrl);
                    });
                    </script>
                    
                </ul>
              </div>
            </div>
            <div class="footer-creds">
              <div class="copy-creds">
                <p>©2019 · Todos los derechos reservados.</p>
              </div>
              <div class="legal-creds">
                <ul>
                  <li><a href="">Política de Privacidad</a></li>
                  <li><a href="">Política de Cookies</a></li>
                  <li><a href="">Aviso Legal</a></li>
                </ul>
              </div>
            </div>
        </footer>
           
</body>
</html>