<?php
// Incluye la definición de las clases necesarias
require_once '../model/PedidoModel.php';
require_once 'GenerarPDF.php';
require_once '../model/QuinoModel.php';

class PedidoQuinoController
{
    public function procesarFormulario()
    {
        session_start();

        $quinoModel = new QuinoModel();
        $consPedido = new ConstanciaPedidoPDF();
        $pedidoModel = new Pedido();

        $quino = $quinoModel->obtenerQuinoPor($_SESSION['tipo_quino']);
        $datosQuino = $quinoModel->obtenerQuinoPorID($_SESSION['tipo_quino']);
        $datos = $consPedido->procesar($quino, $datosQuino, $_POST['observaciones']);

        // Llamar al método para crear el pedido con la constancia de pedido
        $lastId = $pedidoModel->crearPedido($datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7]);

        $_SESSION['id_pedido'] = $lastId;

        // Redirigir a la página de confirmación
        header('Location: ../view/ConfirmacionPedido.php');
        exit();
    }
}

// Crea una instancia del controlador de PedidoQuino
$pedidoQuinoController = new PedidoQuinoController();

// Llama al método para procesar el formulario
$pedidoQuinoController->procesarFormulario();
?>