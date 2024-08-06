<?php
// Incluye la definición de las clases necesarias
require_once '../model/PedidoModel.php';
require_once 'GenerarPDF.php';
require_once '../model/InicialModel.php';

class PedidoInicialController
{
    public function procesarFormulario()
    {
        session_start();

        $inicialModel = new InicialModel();
        $consPedido = new ConstanciaPedidoPDF();
        $pedidoModel = new Pedido();

        $inicial = $inicialModel->obtenerInicialPor($_SESSION['tipo_inicial']);
        $datosInicial = $inicialModel->obtenerInicialPorID($_SESSION['tipo_inicial']);
        $datos = $consPedido->procesar($inicial, $datosInicial, $_POST['observaciones']);

        // Llamar al método para crear el pedido con la constancia de pedido
        $lastId = $pedidoModel->crearPedido($datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7]);

        $_SESSION['id_pedido'] = $lastId;

        // Redirigir a la página de confirmación
        header('Location: ../view/ConfirmacionPedido.php');
        exit();
    }
}

// Crea una instancia del controlador de PedidoQuino
$pedidoInicialController = new PedidoInicialController();

// Llama al método para procesar el formulario
$pedidoInicialController->procesarFormulario();
?>