<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../resources/css/Servicioss.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Promoción Primaria</title>
  <style>
        /* MENU DE PRIMARIA */

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
              $_SESSION["redirect_url"] = "../view/SeleccionarTipoPrimaria.php";

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
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT1')"><img src="../resources/images/PT1.png" alt="Primaria 1"
            class="image7"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT3')"><img src="../resources/images/PT3.png" alt="Primaria 3"
            class="image8"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT2')"><img src="../resources/images/PT2.png" alt="Primaria 2"
            class="image9"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT4')"><img src="../resources/images/PT4.png" alt="Primaria 4"
            class="image10"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT5')"><img src="../resources/images/PT5.png" alt="Primaria 5"
            class="image11"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT7')"><img src="../resources/images/IT8.png" alt="Primaria 7"
            class="image12"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT6')"><img src="../resources/images/IT6.png" alt="Primaria 6"
            class="image13"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT8')"><img src="../resources/images/IT7.png" alt="Primaria 8"
            class="image14"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT9')"><img src="../resources/images/IT9.png" alt="Primaria 9"
            class="image15"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT10')"><img src="../resources/images/PT10.png" alt="Primaria 10"
            class="image16"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT11')"><img src="../resources/images/PT11.png" alt="Primaria 11"
            class="image17"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT12')"><img src="../resources/images/PT12.png" alt="Primaria 12"
            class="image18"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT13')"><img src="../resources/images/PT13.png" alt="Primaria 13"
            class="image19"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT15')"><img src="../resources/images/PT15.png" alt="Primaria 15"
            class="image20"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT14')"><img src="../resources/images/PT14.png" alt="Primaria 14"
            class="image21"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT16')"><img src="../resources/images/PT16.png" alt="Primaria 16"
            class="image22"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT17')"><img src="../resources/images/PT17.png" alt="Primaria 17"
            class="image23"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT19')"><img src="../resources/images/PT19.png" alt="Primaria 19"
            class="image24"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT18')"><img src="../resources/images/PT18.png" alt="Primaria 18"
            class="image25"></a>
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT20')"><img src="../resources/images/PT20.png" alt="Primaria 20"
            class="image26"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroPrimaria('PT21')"><img src="../resources/images/PT21.png" alt="Primaria 21"
            class="image27"></a>
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
    function irARegistroPrimaria(tipo) {
      // Usa JavaScript para redirigir a la página y pasar el parámetro en la URL
      window.location.href = 'RegistroPrimaria.php?tipo_primaria=' + tipo;
    }
  </script>
</body>

</html>