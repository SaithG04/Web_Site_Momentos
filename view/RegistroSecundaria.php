<?php
require_once '../model/SecundariaModel.php';
// Verifica si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION['id_cliente'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header('Location: Login.html');
    exit();
}

$_SESSION['tipo_secundaria'] = $_GET['tipo_secundaria'];

$datosSecundaria = new SecundariaModel();
$datos = $datosSecundaria->obtenerSecundariaPorID($_GET['tipo_secundaria']);
$descripcion = $datos['descripcion'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Inicial</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #111;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #fff;
            border-radius: 5px;
            background-color: #222;
            color: #fff;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #3498db;
            color: #fff;
        }

        button[type="button"] {
            background-color: #e74c3c;
            color: #fff;
            margin-top: 10px;
        }

        .detalle-paquete {
            text-align: justify;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #222;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }


        .detalle-paquete img {
            max-width: 200px;
            /* Ajustado para controlar el tamaño de las imágenes */
            border-radius: 5px;
            /* Ajustado para añadir bordes redondeados a las imágenes */
        }
    </style>
</head>

<body>

    <!-- Detalle del Paquete -->
    <div class="detalle-paquete">
        <?php echo nl2br($descripcion); ?>
    </div>

    <!-- Encabezado Página -->
    <div class="container">
        <form action="../controller/PedidoSecundariaController.php" method="post" onsubmit="return validarFecha()">
            <!-- Agregar campo de fecha -->
            <label for="fecha">Fecha Separada:</label>
            <input type="date" id="fecha" name="fecha" required>
            <label for="fecha">Observaciones:</label>
            <!-- Observaciones -->
            <div class="observaciones">
                <textarea id="observaciones" name="observaciones" rows="8" cols="80"
                    placeholder="Escribe tus observaciones aquí" style="resize: none;"></textarea>
            </div>

            <!-- Botones -->
            <div class="botones">
                <button type="submit">Crear Pedido</button>
                <button type="button" onclick="redireccionar()">Regresar</button>
            </div>
        </form>
    </div>

    <!-- Script para validar y formatear la fecha -->
    <script>
        function validarFecha() {
            // Obtener el valor del campo de fecha
            var fechaSeleccionada = document.getElementById('fecha').value;

            // Obtener la fecha actual en el formato YYYY-MM-DD
            var fechaActual = new Date().toISOString().split('T')[0];

            // Validar que la fecha seleccionada no sea igual o anterior a la fecha actual
            if (fechaSeleccionada <= fechaActual) {
                alert('La fecha debe ser posterior a la fecha actual.');
                return false; // Detener el envío del formulario
            }

            // Asignar la fecha formateada al campo de fecha
            document.getElementById('fecha').value = fechaSeleccionada;

            return true; // Permitir el envío del formulario
        }
        // Función para redireccionar
        function redireccionar() {
            window.location.href = 'SeleccionarTipoSecundaria.php';
        }
    </script>

</body>

</html>