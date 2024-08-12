<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/css/Servicioss.css" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Nuestros Servicios</title>
</head>

<body>

    <?php 
        include 'menu.php';
    ?>

    <img class="logo" src="../resources/images/logomomentos.jpeg">


    <div class="container">

        <div class="row">

            <div class="column">
                <a href="SeleccionarTipoBoda.php"><img src="../resources/images/boda.jpg" alt="Imagen 1" class="image1"> </a>
                <a href="SeleccionarTipoInicial.php"><img src="../resources/images/inicial.jpg" alt="Imagen 2" class="image2"></a>
            </div>

            <div class="column">
                <a href="SeleccionarTipoQuino.php"><img src="../resources/images/Quino.jpg" alt="Imagen 3" class="image3"></a>
                <a href="SeleccionarTipoPrimaria.php"><img src="../resources/images/Primaria.jpg" alt="Imagen 4" class="image4"></a>
            </div>

        </div>

        <div class="row">

            <div class="centered-image">
                <a href="SeleccionarTipoSecundaria.php"><img src="../resources/images/Secundaria.jpg" alt="Imagen 5"
                        class="image5"></a>
            </div>

        </div>
        <!--
      <div class="row">
        
        <div class="centered-image">
            <a href="login.html"><img src="../resources/images/editar.jpg" class="image6"></a>
        </div>

      </div>
    -->
    </div>

    <!--Iconos Redes Sociales-->
    <div class="redes-sociales">
        <a href="https://www.facebook.com/MomentosFotosyvideo" target="_blank"><img
                src="../resources/images/facebook.png" alt="Facebook" class="face"></a>
        <a href="https://www.instagram.com/momentos_fotoyvideo/" target="_blank"><img
                src="../resources/images/instagram.png" alt="Instagram" class="insta"></a>
        <a href="https://wa.link/mg1jbu" target="_blank"><img src="../resources/images/whatsapp.png" alt="Whatsapp"
                class="wsp"></a>
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