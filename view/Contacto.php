<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../resources/css/Contacto.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <title>Contáctanos</title>
</head>

<body>

  <?php 
    include 'menu.php';
  ?>

  <img class="logo" src="../resources/images/logomomentos.jpeg">


  <!--Iconos Redes Sociales-->
  <div class="redes-sociales">
    <a href="https://www.facebook.com/MomentosFotosyvideo" target="_blank"><img src="../resources/images/facebook.png"
        alt="Facebook" class="face" width="50" height="50"></a>
    <a href="https://www.instagram.com/momentos_fotoyvideo/" target="_blank"><img
        src="../resources/images/instagram.png" alt="Instagram" class="insta" width="50" height="50"></a>
    <a href="https://wa.link/mg1jbu" target="_blank"><img src="../resources/images/whatsapp.png" alt="Whatsapp"
        class="wsp" width="50" height="50"></a>
  </div>
  <script>
    function toggleMenu() {
      var menuContent = document.getElementById('menuContent');
      menuContent.style.display = (menuContent.style.display === 'block') ? 'none' : 'block';
    }

    document.addEventListener('DOMContentLoaded', function () {
      var menuContent = document.getElementById('menuContent');
      menuContent.style.display = 'none';
    });
  </script>
</body>

</html>