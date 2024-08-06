<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos</title>
    <style>

 /*
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            min-height: 100vh;
        }


        .container {
            text-align: center;
            padding: 20px;
            border: 1px solid #fff;
            border-radius: 10px;
            margin-top: 50px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        p {
            font-size: 20px;
            margin: 10px 0;
        }*/
    </style>
</head>
<body>

    <div class="container">
        <?php
        require_once '../model/ClienteModel.php';
        class VerDatosController
        {
            public function mostrarDatos()
            {
                session_start();
                $clienteModel = new ClienteModel();
                $datosUsuario = $clienteModel->obtenerClientePorId($_SESSION['id_cliente']);  // ID del usuario en la sesión
        
                // Luego, renderiza la vista con los datos obtenidos.
                require '../view/VerDatos.php';
            }
        
        }
        $verDatosController = new VerDatosController();
        $verDatosController->mostrarDatos();
        ?>

    </div>
</body>
</html>
