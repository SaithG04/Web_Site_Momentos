<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos de mi Cuenta</title>
    <style>
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
        }
    </style>
</head>

<body>
    <h1>Datos de mi Cuenta</h1>

    <?php if ($datosUsuario): ?>
        <p>Tipo de Documento:
            <?php echo $datosUsuario['tipo_documento']; ?>
        </p>
        <p>Documento:
            <?php echo $datosUsuario['documento']; ?>
        </p>

        <?php if ($datosUsuario['tipo_documento'] === 'RUC'): ?>
            <p>Razón Social:
                <?php echo $datosUsuario['nombre_o_razon_social']; ?>
            </p>
        <?php else: ?>
            <p>Nombre Completo:
                <?php echo $datosUsuario['nombre_o_razon_social']; ?>
            </p>
        <?php endif; ?>

        <p>Teléfono:
            <?php echo $datosUsuario['telefono']; ?>
        </p>
        <p>Correo:
            <?php echo $datosUsuario['correo']; ?>
        </p>
        <!-- Agrega más campos según la estructura de tus datos de usuario -->
    <?php else: ?>
        <p>No se pudieron obtener los datos del usuario.</p>
    <?php endif; ?>
    <p><a href="../index.php">Volver al
            inicio</a></p>
</body>

</html>