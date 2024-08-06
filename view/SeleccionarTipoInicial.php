<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../resources/css/Servicioss.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Promoción Inicial</title>
      <style>
        /* MENU DE INICIAL */

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
              margin-bottom: 5px; /* Ajusta este valor según tus necesidades */
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
              $_SESSION["redirect_url"] = "../view/SeleccionarTipoInicial.php";

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
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT1')"><img src="../resources/images/IT1.png" alt="Inicial 1"
            class="image7"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT4')"><img src="../resources/images/IT4.png" alt="Inicial 4"
            class="image8"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT2')"><img src="../resources/images/IT2.png" alt="Inicial 2"
            class="image9"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT3')"><img src="../resources/images/IT3.png" alt="Inicial 3"
            class="image10"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT5')"><img src="../resources/images/IT5.png" alt="Inicial 5"
            class="image11"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT8')"><img src="../resources/images/IT8.png" alt="Inicial 8"
            class="image12"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT6')"><img src="../resources/images/IT6.png" alt="Inicial 6"
            class="image13"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT7')"><img src="../resources/images/IT7.png" alt="Inicial 7"
            class="image14"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT9')"><img src="../resources/images/IT9.png" alt="Inicial 9"
            class="image15"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT11')"><img src="../resources/images/IT11.png" alt="Inicial 11"
            class="image16"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT10')"><img src="../resources/images/IT10.png" alt="Inicial 10"
            class="image17"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT12')"><img src="../resources/images/IT12.png" alt="Inicial 12"
            class="image18"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT13')"><img src="../resources/images/IT13.png" alt="Inicial 13"
            class="image19"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT15')"><img src="../resources/images/IT15.png" alt="Inicial 15"
            class="image20"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT14')"><img src="../resources/images/IT14.png" alt="Inicial 14"
            class="image21"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT16')"><img src="../resources/images/IT16.png" alt="Inicial 16"
            class="image22"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT17')"><img src="../resources/images/IT17.png" alt="Inicial 17"
            class="image23"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT19')"><img src="../resources/images/IT19.png" alt="Inicial 19"
            class="image24"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT18')"><img src="../resources/images/IT18.png" alt="Inicial 18"
            class="image25"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT20')"><img src="../resources/images/IT20.png" alt="Inicial 20"
            class="image26"></a>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT21')"><img src="../resources/images/IT21.png" alt="Inicial 21"
            class="image27"></a>
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT23')"><img src="../resources/images/IT23.png" alt="Inicial 23"
            class="image28"></a>
      </div>
      <div class="column">
        <a href="javascript:void(0);" onclick="irARegistroInicial('IT22')"><img src="../resources/images/IT22.png" alt="Inicial 22"
            class="image29"></a>
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

    function irARegistroInicial(tipo) {
      // Usa JavaScript para redirigir a la página y pasar el parámetro en la URL
      window.location.href = 'RegistroInicial.php?tipo_inicial=' + tipo;
    }
  </script>
</body>

</html>