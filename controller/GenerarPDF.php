<?php

require_once '../model/ClienteModel.php';
require_once '../fpdf/fpdf.php';

class ConstanciaPedidoPDF extends FPDF
{
    private $zonaHoraria;
    private $cliente;
    private $producto;

    public function procesar($pedido, $datosPedido, $observaciones)
    {

        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $clienteModel = new ClienteModel();

            $idCliente = $_SESSION['id_cliente'];
            $clienteResult = $clienteModel->obtenerClientePorId($idCliente);

            $idProducto = $pedido['id_producto'];
            $nombre = $pedido['nombre'];
            $fechaPedido = date("Y/m/d");
            $fechaSeparada = date("Y/m/d", strtotime($_POST['fecha']));
            $fechaEntrega = null;
            $estadoPedido = "Pendiente";

            $reemplazos = array(
                'á' => 'a',
                'é' => 'e',
                'í' => 'i',
                'ó' => 'o',
                'ú' => 'u',
                'ñ' => 'n',
                'Á' => 'A',
                'É' => 'E',
                'Í' => 'I',
                'Ó' => 'O',
                'Ú' => 'U',
                'Ñ' => 'N'
            );

            // Crear el PDF
            $this->AddPage();

            $cliente = [
                'nombre' => strtr($clienteResult['nombre_o_razon_social'], $reemplazos),
                'tipo_documento' => $clienteResult['tipo_documento'],
                'documento' => $clienteResult['documento']
            ];

            $producto = [
                'nombre' => strtr($nombre, $reemplazos),
                'descripcion' => strtr($datosPedido['descripcion'], $reemplazos),
                'monto' => strtr($pedido['precio'], $reemplazos)
            ];

            // Agregar el contenido de la constancia de pedido
            $this->ContenidoPedido($cliente, $producto, $fechaPedido, $fechaSeparada, $estadoPedido, $observaciones);

            // Guardar o mostrar el PDF 
            $pdfContenido = $this->Output('ConstanciaPedido.pdf', 'S');

            $datos = [
                1 => $idCliente,
                2 => $idProducto,
                3 => $fechaPedido,
                4 => $fechaSeparada,
                5 => $fechaEntrega,
                6 => $estadoPedido,
                7 => $pdfContenido
            ];

            return $datos;
        }
    }

    public function __construct()
    {
        parent::__construct();
        $this->zonaHoraria = new DateTimeZone('America/Lima');  // Set the time zone to Lima
        $this->AddFont('Arial', '', 'helvetica.php');
    }

    function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Constancia de Pedido', 0, 1, 'C');
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 6, "MACK'S MOMENTOS E.I.R.L.", 0, 1, 'C');
        $this->SetFont('Arial', 'I', 11);
        $this->Cell(0, 6, 'RUC 20604968179 Av. E Nro. 33 C.H. Talara (Media cdra. de EPPO) Piura - Talara - Parinas', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);

        $fechaActual = new DateTime('now', $this->zonaHoraria);

        $this->Cell(0, 10, 'Fecha: ' . $fechaActual->format('Y-m-d H:i:s'), 0, 0, 'L');
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'R');
    }

    function ContenidoPedido($cliente, $producto, $fechaPedido, $fechaSeparada, $estadoPedido, $observaciones)
    {
        $this->SetFont('Arial', 'B', 12);

        $this->Cell(0, 10, 'Datos del Cliente:', 0, 1, 'L');
        $this->Ln(5);

        $this->SetFont('Arial', '', 12);

        $this->Cell(40, 6, 'Cliente:', 0, 0);
        $this->Cell(0, 6, $cliente['nombre'], 0, 1);

        $this->Cell(40, 6, $cliente['tipo_documento'] . ':', 0, 0);
        $this->Cell(0, 6, $cliente['documento'], 0, 1);

        $this->Ln(10);

        $this->SetFont('Arial', 'B', 12);

        $this->Cell(0, 10, 'Detalle del Pedido:', 0, 1, 'L');
        $this->Ln(5);

        $this->SetFont('Arial', '', 12);

        $this->Cell(40, 6, 'Producto:', 0, 0);
        $this->Cell(0, 6, $producto['nombre'], 0, 1);

        $this->Cell(40, 6, 'Descripcion:', 0, 0);
        $this->MultiCell(0, 6, $producto['descripcion']);

        $this->Cell(40, 6, 'Precio:', 0, 0);
        $this->Cell(0, 6, $producto['monto'], 0, 1);

        $this->Cell(40, 6, 'Fecha Pedido:', 0, 0);
        $this->Cell(0, 6, $fechaPedido, 0, 1);

        $this->Cell(40, 6, 'Fecha de Reserva:', 0, 0);
        $this->Cell(0, 6, $fechaSeparada, 0, 1);

        $this->Cell(40, 6, 'Estado Pedido:', 0, 0);
        $this->Cell(0, 6, $estadoPedido, 0, 1);

        $this->Cell(40, 6, 'Observaciones:', 0, 0);
        $this->MultiCell(0, 6, $observaciones);
        $this->Ln(10);

        $this->SetFont('Arial', 'I', 11);
        $this->Cell(0, 10, 'No olvide estar atento a su correo y numero de contacto. Muchas gracias por elegirnos.', 0, 1, 'C');

        $this->Ln(5);
    }
}
?>