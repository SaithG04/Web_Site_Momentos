<?php
require_once '../model/ClienteModel.php';

class RegistroClienteController
{
    // Método para mostrar el formulario de registro de cliente
    public function mostrarFormulario()
    {
        // Incluye la vista del formulario de registro de cliente
        include '../view/RegistroCliente.php';
    }

    // Método para registrar un nuevo cliente
    public function registrarCliente()
    {
        // Verifica si la solicitud es de tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Obtiene los datos del formulario de registro
            $tipoDocumento = $_POST['tipo_documento'];
            $documento = $_POST['documento'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];
            $nombreORS = '';

            //Validaciones
            if($tipoDocumento === "DNI" && strlen($documento) != 8){
                echo "mal";
            }


            // Determina el nombre o razón social dependiendo del tipo de documento
            if ($tipoDocumento == 'RUC') {
                $nombreORS = $_POST['razon_social'];
            } else {
                $nombreORS = $_POST['nombres'] . " " . $_POST['apellidos'];
            }

            // Crea una instancia del modelo de cliente
            $clienteModel = new ClienteModel();

            try {
                // Verifica si el correo ya está registrado
                $clientes = $clienteModel->obtenerClientePorCorreo($correo);

                if ($clientes) {
                    echo "El correo ya está registrado. Intente con otro correo.";
                } else {
                    // Aplica hash a la contraseña antes de almacenarla
                    $hashContraseña = password_hash($contraseña, PASSWORD_DEFAULT);

                    // Registra al nuevo cliente
                    $clienteModel->registrarNuevoCliente(
                        $tipoDocumento,
                        $documento,
                        $nombreORS,
                        $telefono,
                        $correo,
                        $hashContraseña
                    );
                    // Redirige a la página de login después de registrar al cliente
                    header('Location: ../view/Login.html');
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        // Finaliza la ejecución del script
        exit();
    }
}

// Crea una instancia del controlador de registro de cliente
$registroClienteController = new RegistroClienteController();

// Determina la acción a realizar (mostrar formulario o registrar cliente) según el método de solicitud
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $registroClienteController->registrarCliente();
} else {
    $registroClienteController->mostrarFormulario();
}
?>