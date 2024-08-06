<?php
// Incluye la definición de las clases necesarias
require_once '../model/PedidoModel.php';
require_once 'GenerarPDF.php';
require_once '../model/SecundariaModel.php';

class PedidoSecundariaController
{
    public function procesarFormulario()
    {
        session_start();

        $secundariaModel = new SecundariaModel();
        $consPedido = new ConstanciaPedidoPDF();
        $pedidoModel = new Pedido();

        $secundaria = $secundariaModel->obtenerSecundariaPor($_SESSION['tipo_secundaria']);
        $datosSecundaria = $secundariaModel->obtenerSecundariaPorID($_SESSION['tipo_secundaria']);
        $datos = $consPedido->procesar($secundaria, $datosSecundaria, $_POST['observaciones']);

        // Llamar al método para crear el pedido con la constancia de pedido
        $lastId = $pedidoModel->crearPedido($datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7]);

        $_SESSION['id_pedido'] = $lastId;

        // Redirigir a la página de confirmación
        header('Location: ../view/ConfirmacionPedido.php');
        exit();
    }
}

// Crea una instancia del controlador de PedidoQuino
$pedidoSecundariaController = new PedidoSecundariaController();

// Llama al método para procesar el formulario
$pedidoSecundariaController->procesarFormulario();
?>