<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
        }

        label,
        select,
        input,
        button {
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        button {
            background-color: #fff;
            color: #000;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Agregado para ajustar la posición del botón */
        }

        a {
            color: #fff;
            text-align: center;
            display: block;
            margin-top: 10px;
        }
    </style>
    <title>Registro de Cliente</title>
</head>

<body>

    <form action="../controller/RegistroClienteController.php" method="post" autocomplete="on">

        <h2>Registro de Cliente</h2>

        <label for="tipo_documento">Tipo de Documento:</label>
        <select name="tipo_documento" id="tipo_documento" required>
            <option value="DNI">DNI</option>
            <option value="CE">CE</option>
            <option value="Pasaporte">Pasaporte</option>
            <option value="RUC">RUC</option>
        </select>

        <fieldset>
            <legend>Datos Personales</legend>

            <label for="documento">Número de documento:</label>
            <input type="number" name="documento" id="documento" required>

            <label for="nombres" id="nombres_label">Nombres:</label>
            <input type="text" name="nombres" id="nombres">

            <label for="apellidos" id="apellidos_label">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos">

            <label for="razon_social" id="razon_social_label">Razón Social:</label>
            <input type="text" name="razon_social" id="razon_social">

            <label for="telefono">Teléfono:</label>
            <input type="number" name="telefono">

            <label for="correo">Correo:</label>
            <input type="email" name="correo" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" required>
        </fieldset>

        <button type="submit">Registrarse</button>
    </form>

    <a href="../view/Login.html">¿Ya tienes una cuenta? Inicia sesión aquí</a>

    <script src="../resources/js/RegistroCliente.js"></script>
</body>

</html>