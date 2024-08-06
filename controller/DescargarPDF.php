<?php
require_once '../model/PedidoModel.php';

class DescargarPDF
{
    public function descargar()
    {
        session_start();
        $pedidoModel = new Pedido();
        $result = $pedidoModel->obtenerPedidoPorId($_SESSION['id_pedido']);

        // Verifica si $result es un array y no está vacío
        if ($result && is_array($result)) {
            // Verifica si la clave 'contrato' existe en el array
            if (array_key_exists('contrato', $result)) {
                $contenidoBinario = $result['contrato'];

                $nombreArchivo = 'constancia.pdf';
                header('Content-Type: application/pdf');
                header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');
                echo $contenidoBinario;
            } else {
                die("No se encontró el contrato en la fila de la base de datos.");
            }
        } else {
            die("No se encontró el archivo en la base de datos.");
        }
    }
}

$descargar = new DescargarPDF();
$descargar->descargar();
?>