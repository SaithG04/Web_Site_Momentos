<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resources/css/Momentos.css" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title>Momentos</title>
</head>

<body>

    <?php 
        include 'view/menu.php';
    ?>


    <!-- Logo -->
    <div>
        <img class="logo" src="resources/images/logomomentos.jpeg">
    </div>

    <!-- Slide -->
    <div class="slideshow-container">
        <div class="slideshow-inner">
            <div class="mySlides">
                <img src="resources/images/imagen1.jpg" alt="Imagen 1">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen2.jpg" alt="Imagen 2">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen3.jpg" alt="Imagen 3">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen4.jpg" alt="Imagen 5">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen5.jpg" alt="Imagen 4">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen6.jpg" alt="Imagen 6">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen7.jpg" alt="Imagen 7">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen8.jpg" alt="Imagen 8">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen9.jpg" alt="Imagen 9">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen10.jpg" alt="Imagen 10">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen11.jpg" alt="Imagen 11">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen12.jpg" alt="Imagen 12">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen13.jpg" alt="Imagen 13">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen14.jpg" alt="Imagen 14">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen15.jpg" alt="Imagen 15">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen16.jpg" alt="Imagen 16">
            </div>

            <div class="mySlides">
                <img src="resources/images/imagen17.jpg" alt="Imagen 17">
            </div>
        </div>
    </div>

    <!-- Iconos Redes Sociales -->
    <div class="redes-sociales">
        <a href="https://www.facebook.com/MomentosFotosyvideo" target="_blank"><img src="resources/images/facebook.png"
                alt="Facebook" class="face"></a>
        <a href="https://www.instagram.com/momentos_fotoyvideo/" target="_blank"><img
                src="resources/images/instagram.png" alt="Instagram" class="insta"></a>
        <a href="https://wa.link/mg1jbu" target="_blank"><img src="resources/images/whatsapp.png" alt="Whatsapp"
                class="wsp"></a>
    </div>

    <!-- Script para el menú desplegable -->
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

    <!-- Script externo para funcionalidades adicionales -->
    <script src="resources/js/Momentos.js"></script>
</body>

</html>