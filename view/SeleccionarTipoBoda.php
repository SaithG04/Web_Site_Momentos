<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../resources/css/Servicioss.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Bodas</title>
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
              $_SESSION["redirect_url"] = "../view/SeleccionarTipoBoda.php";

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
        <!-- Enlaces a diferentes páginas de servicios -->
        <a href="javascript:void(0);" onclick="irARegistroBoda('BT1')"><img src="../resources/images/boda1.jpg" alt="Boda 1" class="image1"> </a>
        <a href="javascript:void(0);" onclick="irARegistroBoda('BT2')"><img src="../resources/images/boda2.jpg" alt="Boda 2" class="image2"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroBoda('BT3')"><img src="../resources/images/boda3.jpg" alt="Boda 3" class="image3"></a>
        <a href="javascript:void(0);" onclick="irARegistroBoda('BT4')"><img src="../resources/images/boda4.jpg" alt="Boda 4" class="image4"></a>
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
    // Función para redireccionar a RegistroBoda.php con parámetro
    function irARegistroBoda(tipo) {
      // Usa JavaScript para redirigir a la página y pasar el parámetro en la URL
      window.location.href = 'RegistroBoda.php?tipo_boda=' + tipo;
    }
  </script>
</body>

</html>