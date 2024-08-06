<?php
// Incluye la definición de las clases necesarias
require_once '../model/PedidoModel.php';
require_once 'GenerarPDF.php';
require_once '../model/BodaModel.php';

class PedidoBodaController
{
    public function procesarFormulario()
    {
        session_start();
        
        $bodaModel = new BodaModel();
        $consPedido = new ConstanciaPedidoPDF();
        $pedidoModel = new Pedido();

        $boda = $bodaModel->obtenerBodaPor($_SESSION['tipo_boda']);
        $datosBoda = $bodaModel->obtenerBodaPorID($_SESSION['tipo_boda']);
        $datos = $consPedido->procesar($boda, $datosBoda, $_POST['observaciones']);

        // Llamar al método para crear el pedido con la constancia de pedido
        $lastId = $pedidoModel->crearPedido($datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7]);

        $_SESSION['id_pedido'] = $lastId;

        // Redirigir a la página de confirmación
        header('Location: ../view/ConfirmacionPedido.php');
        exit();
    }
}

// Crea una instancia del controlador de PedidoBoda
$pedidoBodaController = new PedidoBodaController();

// Llama al método para procesar el formulario
$pedidoBodaController->procesarFormulario();
?>