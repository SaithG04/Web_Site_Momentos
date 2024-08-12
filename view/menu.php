<?php
// Obtener la URL actual
$currentUrl = $_SERVER['REQUEST_URI'];

// Establecer el valor predeterminado de la imagen
$imageSrc = '../resources/images/icono.png';
$index = '../index.php';
$acercaDe = 'Acerca_de.php';
$servicios = 'Servicios.php';
$contacto = 'Contacto.php';
$verDatos = '../controller/VerDatosController.php';
$cerrarSesion = '../controller/CerrarSesion.php';
$login = 'Login.html';

// Cambiar el valor del src según la URL
if (strpos($currentUrl, 'index.php') !== false) {
    $imageSrc = 'resources/images/icono.png';
    $index = 'index.php';
    $acercaDe = 'view/Acerca_de.php';
    $servicios = 'view/Servicios.php';
    $contacto = 'view/Contacto.php';
    $verDatos = 'controller/VerDatosController.php';
    $cerrarSesion = 'controller/CerrarSesion.php';
    $login = 'view/Login.html';
}
?>



<!-- Barra de navegación -->
<div class="menu-container">
        <nav>
            <ul class="menu">
                <li class="menu-icon" onclick="toggleMenu()">
                    <img  class="user-icon" src="<?php echo $imageSrc; ?>" alt="Icono">
                    <!-- Cuadro de opciones -->
                    <div class="overlay" id="overlay">
                        <div class="menu-content" id="menuContent">
                            <?php
                                session_start();
                                $_SESSION["redirect_url"] = $index; // Asignación directa, no es necesario 'echo'

                                if (isset($_SESSION['id_cliente'])) {
                                    echo '<a href="' . $verDatos . '">Mi Cuenta</a><br>';
                                    echo '<a href="' . $cerrarSesion . '">Cerrar Sesión</a>';
                                } else {
                                    echo '<a href="' . $login . '">Iniciar Sesión</a>';
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo $index; ?>">Inicio</a></li>
                <li><a href="<?php echo $acercaDe; ?>">Acerca de</a></li>
                <li><a href="<?php echo $servicios; ?>">Servicios</a></li>
                <li><a href="<?php echo $contacto; ?>">Contacto</a></li>
            </ul>
        </nav>
</div>
<style>
    body{
        background-color: black;
    }

    .user-icon {
        border-radius: 20px;
        height: 35px;
        animation: aparecer 2s ease-in-out forwards;
    }
</style>