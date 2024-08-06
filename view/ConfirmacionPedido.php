<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Confirmación de Pedido</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            margin: 10px 0;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        button {
            background-color: #fff;
            color: #000;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Confirmación de Pedido</h2>
        <p>
            ¡El pedido se ha creado exitosamente!
        </p>
        <p>
            <a href="../index.php">Volver al menú principal</a><br>
            <a href="Servicios.php">Realizar otro pedido</a><br>
        </p>
        <form action="../controller/DescargarPDF.php" method="post">
            <button type="submit" name="descargar">Descargar PDF</button>
        </form>
    </div>
</body>

</html>