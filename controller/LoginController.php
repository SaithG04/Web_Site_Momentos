<?php
// Incluye la definición de la clase ClienteModel
require_once '../model/ClienteModel.php';

class LoginController
{
    // Método para iniciar sesión
    public function iniciarSesion()
    {
        // Inicia la sesión
        session_start();

        // Verifica si la solicitud es de tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtiene el correo y la contraseña del formulario de inicio de sesión
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            // Crea una instancia de ClienteModel para interactuar con la base de datos de clientes
            $clienteModel = new ClienteModel();

            // Obtiene la información del cliente basado en el correo proporcionado
            $cliente = $clienteModel->obtenerClientePorCorreo($correo);

            // Verifica si se encontró un cliente con el correo proporcionado
            if ($cliente) {
                // Verifica si la contraseña proporcionada coincide con el hash almacenado en la base de datos
                if (password_verify($password, $cliente['password'])) {
                    // Inicio de sesión exitoso, establece la variable de sesión 'id_cliente'
                    $_SESSION['id_cliente'] = $cliente['id'];

                    // Obtiene la URL a la que se redirigirá (o la página de inicio por defecto)
                    $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : '../index.php';

                    // Limpia la variable de sesión
                    unset($_SESSION['redirect_url']);

                    // Redirige al usuario a la página correspondiente
                    header('Location: ' .$redirect_url);
                    exit();
                } else {
                    // Muestra un mensaje de alerta si las credenciales son incorrectas y redirige a la página de inicio de sesión
                    echo "<script>alert('Credenciales incorrectas.'); window.location.href = '../view/Login.html';</script>";
                }
            } else {
                // Muestra un mensaje de alerta si el correo no está registrado y redirige a la página de inicio de sesión
                echo "<script>alert('Correo no registrado.'); window.location.href = '../view/Login.html';</script>";
            }
        }
    }
}

// Crea una instancia del controlador de inicio de sesión
$loginController = new LoginController();

// Llama al método iniciarSesion para procesar el inicio de sesión
$loginController->iniciarSesion();
?>