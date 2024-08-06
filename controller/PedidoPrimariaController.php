<?php
// Incluye la definición de las clases necesarias
require_once '../model/PedidoModel.php';
require_once 'GenerarPDF.php';
require_once '../model/PrimariaModel.php';

class PedidoSecundariaController
{
    public function procesarFormulario()
    {
        session_start();
        
        $primariaModel = new PrimariaModel();
        $consPedido = new ConstanciaPedidoPDF();
        $pedidoModel = new Pedido();

        $primaria = $primariaModel->obtenerPrimariaPor($_SESSION['tipo_primaria']);
        $datosPrimaria = $primariaModel->obtenerPrimariaPorID($_SESSION['tipo_primaria']);
        $datos = $consPedido->procesar($primaria, $datosPrimaria, $_POST['observaciones']);

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