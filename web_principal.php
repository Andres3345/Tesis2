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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Poller+One&display=swap">
    <title>Don Enrique Beer & Food</title>
</head>
<body>
<div class="wrap-header-hero" style="background: linear-gradient(to bottom, rgb(0 0 0 / .40), rgb(0 0 0 / .75)), url(assets/img/fondo-principal.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
<header class="main-header" id="Home">
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
                <a href="">Inicio</a>
            </li>
            <li class="menu-item">
                <a href="#Menu">Menu</a>
            </li>
            <li class="menu-item">
                <a href="">Blog</a>
            </li>
            <li id="nav-main-contact" class="menu-item">
                <a href="contacto.php">Reservas</a>
            </li>
        </ul>
    </nav>
    </div>
</div>

</header>

<div class="main-section">
    <!-- Hero Section -->
    <section class="hero-home-page" >
    <div class="wrap-hero-home-page">
        <h1>Don Enrique Beer & Food</h1>
        <p> Un espacio pensado para brindar la mayor comodidad acompañada de la mejor atención y, una amplia variedad de comidas de la mejor calidad. </p>
    </div>
    </section>
</div>
</div>
<!-- Tarjetas -->
<section class="wrap section">
    <div class="wrap-title-section">
        <h2>NUESTROS RECOMENDADOS</h2>
    </div>
    <div class="column-4 columns">
        <div style="background: url(assets/img/pizza.jpg) center; background-size: cover;"
         class="tarjeta-rest">
            <div class="wrap-text_tarjeta-rest">
                <h3>Pizza Especial</h3>
                <p>Salsa, Queso Muzzarella, Jamon, Morrones y Oregano.</p>
                <div class="cta-wrap_tarjeta-rest">
                    <div class="precio_tarjeta-rest">
                        <span>$5000</span>
                    </div>
                    <div class="cta-tarjeta-rest">
                        <a href="#" id="whatsapp-link">Pedir Ahora</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: url(assets/img/burguer.jpg) center; background-size: cover;"
         class="tarjeta-rest">
            <div class="wrap-text_tarjeta-rest">
                <h3>Cheese Burguer</h3>
                <p>Medallon de carne 100grs, Queso Cheddar/Tybo, Aderezos, Papas.
                  Medallon extra $1000
                </p>
                <div class="cta-wrap_tarjeta-rest">
                    <div class="precio_tarjeta-rest">
                        <span>$3000</span>
                    </div>
                    <div class="cta-tarjeta-rest">
                        <a href="#" id="whatsapp-link">Pedir Ahora</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: url(assets/img/mila.jpg) center; background-size: auto;"
         class="tarjeta-rest">
            <div class="wrap-text_tarjeta-rest">
                <h3>Mila Especial</h3>
                <p>Milanesa, Jamon, Queso tybo, Lechuga, Tomate, Aderezos, Papas.</p>
                <div class="cta-wrap_tarjeta-rest">
                    <div class="precio_tarjeta-rest">
                        <span>$4800</span>
                    </div>
                    <div class="cta-tarjeta-rest">
                        <a href="#" id="whatsapp-link">Pedir Ahora</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: url(assets/img/napo.jpg) center; background-size: auto;"
         class="tarjeta-rest">
            <div class="wrap-text_tarjeta-rest">
                <h3>Napolitana P/1</h3>
                <p>Milanesa, Salsa de Tomate, Queso Muzzarella, Jamon, Aceitunas, Papas.</p>
                <div class="cta-wrap_tarjeta-rest">
                    <div class="precio_tarjeta-rest">
                        <span>$5000</span>
                    </div>
                    <div class="cta-tarjeta-rest">
                        <a href="#" id="whatsapp-link">Pedir Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu del Resturante -->
<section class="wrap section" id="Menu">
    <div class="wrap-title-section">
      <h1 style="text-align: center;">🟠NUESTRO MENU🟠</h1>
    </div>
    <div class="column-3 columns">
      <div style="background: url(assets/img/fondo-menu-restaurante.jpg) center;background-size: cover;" class="menu-restaurante">
        <h3>Sandwiches🥪</h3>
      <hr>
      <p>Mila Común - $3800</p>
      <p>Mila Especial - $4500</p>
      <p>Lomo Común - $4500</p>
      <p>Lomo Especial - $5500</p>
      <p>Lomo Roque - $5500</p>
      <p>Lomo Cheddar - $5500</p>
      <br>
      <h4>Bebidas sin Alcohol🥤</h4>
      <p>Linea Coca 1L - $2800</p>
      <p>Linea Pepsi 2L - $3000</p>
      <p>Agua Saborizada 1.5L - $2500</p>
      <p>Linea Pepsi 500ml - $1600</p>
      <br>
      <!-- <p class="precio-menu">Precio: <span >17€</span></p> -->
      </div>
      <div style="background: url(assets/img/fondo-menu-restaurante.jpg) center;background-size: cover;" class="menu-restaurante">
      <h3>Hamburguesas🍔</h3>
      <hr>
      <p>Hamburguesa Comun - $3500</p>
      <p>Hamburguesa Especial - $4100</p>
      <p>Hamburguesa Roque - $4100</p>
      <p>Hamburguesa Peca - $4100</p>
      <p>Hamburguesa Don Enrique - $4800</p>
      <br>
      <h4>Bebidas con Alcohol🍺</h4>
      <p>Cerveza Norte - $3600</p>
      <p>Cerveza Quilmes/Imperial - $3800</p>
      <p>Cerveza Salta Negra - $3700</p>
      <p>Vino Tinto 3/4 - $4000</p>
      <p>Quilmes Lata - $2000</p>
      <p>Medida Fernet Branca - $1800</p>
      <br>
      <!-- <p class="precio-menu">Precio: <span >19€</span></p> -->
      </div>
      <div style="background: url(assets/img/fondo-menu-restaurante.jpg) center;background-size: cover;" class="menu-restaurante">
        <h3>Pizzas🍕</h3>
      <hr>
      <p>Muzzarella - $4000</p>
      <p>Jamon y Morrones - $5000</p>
      <p>Napolitana / Fugazzeta / Roquefort - $5000</p>
      <p>Calabresa - $5200</p>
      <p>Ternera - $5600</p>
      <p>Don Enrique - $6100</p>
      <br>
      <h4>Napolitanas🍽️</h4>
      <p>P/1 Persona - $4800</p>
      <p>P/2 Personas - $8000</p>
      <p>Americana - $6000</p>
      <p>Fugazzeta/Roquefort - $5000</p>
      <br>
      <!-- <p class="precio-menu">Precio: <span >21€</span></p> -->
      </div>
    
      
    </div>
    
  </section>
  <div class="boton">
    <button><a href="/" id="whatsapp-link2">hacer un pedido</a></button>
    <script>
            document.getElementById("whatsapp-link2").addEventListener("click", function(event) {
              event.preventDefault(); // Evitar que el enlace redireccione
            
              // URL para enviar un mensaje a un número específico a través de la API de WhatsApp Business
              var apiUrl = "https://api.whatsapp.com/send?phone=+543863534208&text=Buenas Noches, quiero realizar un pedido.";
            
              // Abre la ventana de WhatsApp en una nueva pestaña
              window.open(apiUrl);
            });
            </script>
  </div>

   <!-- Articulos de Blog  -->
   <section class="section">
    <div class="wrap-title-section">
      <h2>Un Poco Sobre Nosotros</h2>
    </div>
    <div class="card-wrap">
      <article class="card">
        <header class="header-card">
          <img src="assets/img/plato-blog-1.jpg" alt="">
        </header>
        <footer class="footer-card">
          
          <div class="texto-card">
            <h3>Primavera 2024</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptatibus mollitia voluptas ducimus maxime numquam modi suscipit eius tempore ad?</p>
          </div>
          <div class="perfil-card">
            <div class="img-perfil-card">
              <img src="assets/img/perfil-1.jpg" alt="">
            </div>
            <div class="text-perfil-card">
              <span>Fecha</span>
            </div>
          </div>
        </footer>
      </article>
      <article class="card">
        <header class="header-card">
          <img src="assets/img/plato-blog-2.jpg" alt="">
        </header>
        <footer class="footer-card">
        
          <div class="texto-card">
            <h3>Finde en DE</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptatibus mollitia voluptas ducimus maxime numquam modi suscipit eius tempore ad?</p>
          </div>
          <div class="perfil-card">
            <div class="img-perfil-card">
              <img src="assets/img/perfil-2.jpg" alt="">
            </div>
            <div class="text-perfil-card">
              <span>Fecha</span>
            </div>
          </div>
        </footer>
      </article>
      <article class="card">
        <header class="header-card">
          <img src="assets/img/plato-blog-3.jpg" alt="">
        </header>
        <footer class="footer-card">
          
          <div class="texto-card">
            <h3>Lorem ipsum dolor sit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptatibus mollitia voluptas ducimus maxime numquam modi suscipit eius tempore ad?</p>
          </div>
          <div class="perfil-card">
            <div class="img-perfil-card">
              <img src="assets/img/perfil-3.jpg" alt="">
            </div>
            <div class="text-perfil-card">
              <span>Fecha</span>
            </div>
          </div>
        </footer>
      </article>
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
          <li><a href="#Home">Inicio</a></li>
          <li><a href="#Menu">Carta</a></li>
          <li><a href="contacto.php">Reservas</a></li>
        </ul>
      </div>
      <div class="rrss-element-footer element-footer">
        <h5>Redes Sociales</h5>
        <ul>
          <li><a href="/">
            <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNTEyIDc1djM2MmMwIDQxLjM5ODQzOC0zMy42MDE1NjIgNzUtNzUgNzVoLTEyMWwtMzAtMzBoLTMwbC0zMCAzMGgtMTUxYy00MS4zOTg0MzggMC03NS0zMy42MDE1NjItNzUtNzV2LTM2MmMwLTQxLjM5ODQzOCAzMy42MDE1NjItNzUgNzUtNzVoMzYyYzQxLjM5ODQzOCAwIDc1IDMzLjYwMTU2MiA3NSA3NXptMCAwIiBmaWxsPSIjNzk4NGViIi8+PHBhdGggZD0ibTUxMiA3NXYzNjJjMCA0MS4zOTg0MzgtMzMuNjAxNTYyIDc1LTc1IDc1aC0xMjFsLTMwLTMwaC0xNXYtNDgyaDE2NmM0MS4zOTg0MzggMCA3NSAzMy42MDE1NjIgNzUgNzV6bTAgMCIgZmlsbD0iIzQ2NjFkMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC05MHYtMTgyaC02MHYtOTBoNjB2LTYwYzAtMzMuMzAwNzgxIDE4LjMwMDc4MS02Mi40MDIzNDQgNDUtNzggMTMuMTk5MjE5LTcuNSAyOC44MDA3ODEtMTIgNDUtMTJoOTB2OTB6bTAgMCIgZmlsbD0iI2VjZWNmMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC00NXYtNDEwYzEzLjE5OTIxOS03LjUgMjguODAwNzgxLTEyIDQ1LTEyaDkwdjkwem0wIDAiIGZpbGw9IiNlMmUyZTciLz48L3N2Zz4=" alt="icono redes sociales">
          </a></li>
          
          <li><a href="" id="whatsapp-link">
            <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMjU2IDBjLTE0MC42OTkyMTkgMC0yNTYgMTE1LjMwMDc4MS0yNTYgMjU2IDAgNDYuNSAxMi41OTc2NTYgOTEuNSAzNi4zMDA3ODEgMTMxLjEwMTU2MmwtMzYuMzAwNzgxIDEyNC44OTg0MzggMTI0Ljg5ODQzOC0zNi4zMDA3ODFjMzkuNjAxNTYyIDIzLjY5OTIxOSA4NC42MDE1NjIgMzYuMzAwNzgxIDEzMS4xMDE1NjIgMzYuMzAwNzgxIDE0MC42OTkyMTkgMCAyNTYtMTE1LjMwMDc4MSAyNTYtMjU2cy0xMTUuMzAwNzgxLTI1Ni0yNTYtMjU2em0wIDAiIGZpbGw9IiMwMGRkN2IiLz48cGF0aCBkPSJtNTEyIDI1NmMwIDE0MC42OTkyMTktMTE1LjMwMDc4MSAyNTYtMjU2IDI1NnYtNTEyYzE0MC42OTkyMTkgMCAyNTYgMTE1LjMwMDc4MSAyNTYgMjU2em0wIDAiIGZpbGw9IiMwMGNjNzEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0My02MS4xOTkyMTktMzcuMTk5MjE5LTExNi42OTkyMTktMTAzLjE5OTIxOS0xMzAuMTk5MjE5LTE2Mi41OTc2NTctOS4zMDA3ODEtNDAuMjAzMTI1LTQuMTk5MjE5LTc1IDktODguNWwxMi0xMmM2LjYwMTU2My02LjMwMDc4MSAxNy4wOTc2NTctNi4zMDA3ODEgMjMuNjk5MjE5IDBsNDcuNjk5MjE5IDQ3LjY5OTIxOWMzLjMwMDc4MSAzLjMwMDc4MSA1LjEwMTU2MiA3LjUgNS4xMDE1NjIgMTJzLTEuODAwNzgxIDguNjk5MjE5LTUuMTAxNTYyIDEybC0xMiAxMS42OTkyMTljLTEyLjg5ODQzOCAxMy4xOTkyMTktMTIuODk4NDM4IDM0LjUgMCA0Ny42OTkyMTlsNDkuODAwNzgxIDQ4LjkwMjM0MyAyOS4wOTc2NTYgMjguODAwNzgxYzEzLjIwMzEyNSAxMy4xOTkyMTkgMzUuNTAzOTA2IDEzLjE5OTIxOSA0OC43MDMxMjUgMGwxMS42OTkyMTktMTIuMDAzOTA2YzYuMzAwNzgxLTYgMTcuNjk5MjE5LTYgMjQgMGw0Ny42OTkyMTkgNDcuNzAzMTI1YzYuMzAwNzgxIDYuNTk3NjU3IDYuNjAxNTYyIDE3LjA5NzY1NyAwIDI0em0wIDAiIGZpbGw9IiNlY2VjZjEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0M3YtODMuMDk3NjU3bDI5LjA5NzY1NiAyOC44MDA3ODFjMTMuMjAzMTI1IDEzLjE5OTIxOSAzNS41MDM5MDYgMTMuMTk5MjE5IDQ4LjcwMzEyNSAwbDExLjY5OTIxOS0xMi4wMDM5MDZjNi4zMDA3ODEtNiAxNy42OTkyMTktNiAyNCAwbDQ3LjY5OTIxOSA0Ny43MDMxMjVjNi4zMDA3ODEgNi41OTc2NTcgNi42MDE1NjIgMTcuMDk3NjU3IDAgMjR6bTAgMCIgZmlsbD0iI2UyZTJlNyIvPjwvc3ZnPg==" alt="icono redes sociales">
          </a></li>
          <script>
            document.getElementById("whatsapp-link").addEventListener("click", function(event) {
              event.preventDefault(); // Evitar que el enlace redireccione
            
              // URL para enviar un mensaje a un número específico a través de la API de WhatsApp Business
              var apiUrl = "https://api.whatsapp.com/send?phone=+543863534208&text=Buenas Noches, quiero realizar un pedido.";
            
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
          <li><a href="php/cerrar_sesion.php" style="color: red; font-size: 20px;";>Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>
  </footer>


</body>
</html>