<?php
// Incluye la definición de la clase ConexionBD
require_once 'ConexionBD.php';

class BodaModel extends ConexionBD
{
    // Método para obtener información de la boda por id de formato
    public function obtenerBodaPor($idFormato)
    {
        // Consulta SQL para obtener la información de la boda
        $query = "SELECT * FROM paquetes WHERE id_formato_boda = :idFormato";

        // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
        $stmt = $this->conexion->prepare($query);

        // Asocia el parámetro :idFormato con el valor proporcionado
        $stmt->bindParam(':idFormato', $idFormato, PDO::PARAM_STR);

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

    public function obtenerBodaPorID($id)
    {
        // Consulta SQL para obtener la información de la boda
        $query = "SELECT * FROM tipo_boda WHERE id = :id";

        // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
        $stmt = $this->conexion->prepare($query);

        // Asocia el parámetro :idFormato con el valor proporcionado
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

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
}
?>