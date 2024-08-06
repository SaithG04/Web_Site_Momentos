<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Descripción breve de tu sitio">

  <!-- Enlace a la hoja de estilos CSS -->
  <link rel="stylesheet" href="../resources/css/Acerca_de.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Acerca de Nosotros</title>
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
              $_SESSION["redirect_url"] = "../view/Acerca_de.php";

              // Verifica si el cliente está autenticado
              if (isset($_SESSION['id_cliente'])) {
                echo '<a href="../controller/VerDatosController.php">Mi Cuenta</a><br>';
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

  <div class="desc">
    <!-- Sección: Sobre Nosotros -->
    <h2 class="sobre">Sobre Nosotros</h2>
    <p class="descsobre">
      En MOMENTOS, estamos apasionados por capturar momentos extraordinarios y transformarlos en recuerdos eternos.
      Fundada con amor por la fotografía y un compromiso inquebrantable con la calidad, nuestra empresa se enorgullece
      de ofrecer servicios de fotografía excepcionales para satisfacer todas tus necesidades.
    </p>

    <!-- Sección: Nuestra Misión -->
    <h2 class="mision">Nuestra Misión</h2>
    <p class="descmision">
      Nuestra misión es inmortalizar tus momentos más preciados, contar historias a través de nuestras imágenes y
      ofrecer experiencias fotográficas que superen tus expectativas. Estamos dedicados a capturar la belleza en la
      simplicidad y la emoción en cada detalle, creando recuerdos que atesorarás para siempre.
    </p>

    <!-- Sección: Experiencia y Profesionalismo -->
    <h2 class="exp">Experiencia y Profesionalismo</h2>
    <p class="descexp">
      Con más de 10 años de experiencia en la industria de la fotografía, nuestro equipo combina habilidades técnicas
      de vanguardia con una visión artística única. Nos esforzamos por ser profesionales en cada aspecto de nuestro
      trabajo, desde la planificación y la toma de imágenes hasta la edición y la entrega final.
    </p>

    <!-- Sección: Compromiso con la Calidad -->
    <h2 class="compro">Compromiso con la Calidad</h2>
    <p class="desccompro">
      La calidad es la base de todo lo que hacemos. Utilizamos equipos de última generación y técnicas de edición
      avanzadas para garantizar que cada imagen que entregamos sea una obra maestra. Cada foto que tomamos es una
      expresión de nuestro compromiso con la excelencia.
    </p>
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
  <script>
    function toggleMenu() {
      var menuContent = document.getElementById('menuContent');
      menuContent.style.display = (menuContent.style.display === 'block') ? 'none' : 'block';
    }

    // Ocultar el menú al cargar la página
    document.addEventListener('DOMContentLoaded', function () {
      var menuContent = document.getElementById('menuContent');
      menuContent.style.display = 'none';
    });
  </script>
</body>

</html>