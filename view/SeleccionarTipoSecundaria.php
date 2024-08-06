<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../resources/css/Servicioss.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Promoción Primaria</title>
  <style>
        /* MENU DE SECUNDARIA */

          .centered-image {
              width: 100%;
              text-align: center;
          }

          [class^="image"] {
              display: block;
              width: 300px;
              height: 200px;
              margin: 10px 5px 5px 10px; 
              border-radius: 10%;
          }

          [class^="image"]:hover {
              transform: scale(104%);
              box-shadow: 0 0 20px white;
          }

          .image7, .image8, .image9, .image10, .image11, .image12, .image13, .image14, .image15, .image16, .image17, .image18, .image19, .image20, .image21, .image22, .image23, .image24, .image25, .image26, .image27, .image28, .image29 {
              margin-bottom: 5px; 
          }
      </style>
</head>

<body>

  <!-- Encabezado de la Página -->
  <div class="menu-container">
    <nav>
      <ul class="menu">
        <!-- Ícono de menú con cuadro de opciones -->
        <li class="menu-icon" onclick="toggleMenu()">
          <img src="icono.png" alt="Icono">
          <!-- Cuadro de opciones -->
          <div class="overlay" id="overlay">
            <div class="menu-content" id="menuContent">
              <?php
              // Inicia la sesión y establece la URL de redirección
              session_start();
              $_SESSION["redirect_url"] = "../view/SeleccionarTipoSecundaria.php";

              // Verifica si el cliente está autenticado
              if (isset($_SESSION['id_cliente'])) {
                echo '<a href="mi_cuenta.php">Mi Cuenta</a><br>';
                echo '<a href="../controller/CerrarSesion.php">Cerrar Sesión</a>';
              } else {
                echo '<a href="../view/Login.html">Iniciar Sesión</a>';
              }
              ?>
            </div>
          </div>
        </li>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="Acerca_de.php">Acerca de</a></li>
        <li><a href="Servicios.php">Servicios</a></li>
        <li><a href="Contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </div>

  <!-- Logo de Momentos -->
  <img class="logo" src="../resources/images/logomomentos.jpeg" alt="Logo de Momentos">

  <!-- Contenedor de imágenes -->
  <div class="container">
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST1')"><img src="../resources/images/ST1.png" alt="Secundaria 1"
            class="image7"></a>
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST3')"><img src="../resources/images/ST3.png" alt="Secundaria 3"
            class="image8"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST2')"><img src="../resources/images/ST2.png" alt="Secundaria 2"
            class="image9"></a>
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST4')"><img src="../resources/images/ST4.png" alt="Secundaria 4"
            class="image10"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST5')"><img src="../resources/images/ST5.png" alt="Secundaria 5"
            class="image11"></a>
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST7')"><img src="../resources/images/ST7.png" alt="Secundaria 7"
            class="image12"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST6')"><img src="../resources/images/ST6.png" alt="Secundaria 6"
            class="image13"></a>
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST8')"><img src="../resources/images/ST8.png" alt="Secundaria 8"
            class="image14"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST9')"><img src="../resources/images/ST9.png" alt="Secundaria 9"
            class="image15"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroSecundaria('ST10')"><img src="../resources/images/ST10.png" alt="Secundaria 10"
            class="image15"></a>
      </div>
    </div>
  </div>

  <!-- Iconos de Redes Sociales -->
  <div class="redes-sociales">
    <a href="https://www.facebook.com/MomentosFotosyvideo" target="_blank"><img src="../resources/images/facebook.png"
        alt="Facebook" class="face"></a>
    <a href="https://www.instagram.com/momentos_fotoyvideo/" target="_blank"><img
        src="../resources/images/instagram.png" alt="Instagram" class="insta"></a>
    <a href="https://wa.link/mg1jbu" target="_blank"><img src="../resources/images/whatsapp.png" alt="Whatsapp"
        class="wsp"></a>
  </div>

  <!-- Scripts -->
  <script src="script.js"></script>
  <script>
    // Función para alternar la visibilidad del menú
    function toggleMenu() {
      var menuContent = document.getElementById('menuContent');
      menuContent.style.display = (menuContent.style.display === 'block') ? 'none' : 'block';
    }

    // Ocultar el menú al cargar la página
    document.addEventListener('DOMContentLoaded', function () {
      var menuContent = document.getElementById('menuContent');
      menuContent.style.display = 'none';
    });
    function irARegistroSecundaria(tipo) {
      // Usa JavaScript para redirigir a la página y pasar el parámetro en la URL
      window.location.href = 'RegistroSecundaria.php?tipo_secundaria=' + tipo;
    }
  </script>
</body>

</html>