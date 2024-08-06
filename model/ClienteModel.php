<?php
// Incluye la definición de la clase ConexionBD
require_once 'ConexionBD.php';

class ClienteModel extends ConexionBD
{
    // Método para obtener información del cliente por correo electrónico
    public function obtenerClientePorCorreo($correo)
    {
        // Consulta SQL para obtener la información del cliente por correo electrónico
        $query = "SELECT * FROM clientes WHERE correo = :correo";

        // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
        $stmt = $this->conexion->prepare($query);

        // Asocia el parámetro :correo con el valor proporcionado
        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);

        // Ejecuta la consulta preparada
        if (!$stmt->execute()) {
            // Error en la ejecución de la consulta
            $errorInfo = $stmt->errorInfo();
            die("Error en la consulta: " . $errorInfo[2]);
        }

        // Obtiene el resultado de la consulta como un array asociativo
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retorna el resultado de la consulta
        return $result;
    }

    public function obtenerClientePorId($id)
    {
        // Consulta SQL para obtener la información del cliente por su id
        $query = "SELECT * FROM clientes WHERE id = :id";

        // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
        $stmt = $this->conexion->prepare($query);

        // Asocia el parámetro :id con el valor proporcionado
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Ejecuta la consulta preparada
        if (!$stmt->execute()) {
            // Error en la ejecución de la consulta
            $errorInfo = $stmt->errorInfo();
            die("Error en la consulta: " . $errorInfo[2]);
        }

        // Obtiene el resultado de la consulta como un array asociativo
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retorna el resultado de la consulta
        return $result;
    }

    // Método para registrar un nuevo cliente en la base de datos
    public function registrarNuevoCliente($tipoDocumento, $documento, $nombreORS, $telefono, $correo, $contraseña)
    {
        // Consulta SQL para insertar un nuevo cliente en la base de datos
        $query = "INSERT INTO clientes (tipo_documento, documento, nombre_o_razon_social, telefono, correo, password) 
              VALUES (:tipoDocumento, :documento, :nombreORS, :telefono, :correo, :password)";

        // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
        $stmt = $this->conexion->prepare($query);

        // Asocia los parámetros con los valores proporcionados
        $stmt->bindParam(':tipoDocumento', $tipoDocumento, PDO::PARAM_STR);
        $stmt->bindParam(':documento', $documento, PDO::PARAM_STR);
        $stmt->bindParam(':nombreORS', $nombreORS, PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);
        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
        $stmt->bindParam(':password', $contraseña, PDO::PARAM_STR);

        // Ejecuta la consulta preparada
        $stmt->execute();
    }
}
?>