<?php
// Importa la definición de la clase ConexionBD
require_once('ConexionBD.php');

// Definición de la clase Pedido que extiende de ConexionBD
class Pedido extends ConexionBD
{
    // Método para crear un nuevo pedido en la base de datos
    public function crearPedido($idCliente, $idProducto, $fechaPedido, $fechaSeparada, $fechaEntrega, $estadoPedido, $contrato)
    {
        try {
            // Consulta SQL para insertar un nuevo pedido
            $sql = "INSERT INTO pedidos (id_cliente, id_producto, fecha_pedido, fecha_separada, fecha_entrega, estado_pedido, contrato) 
                    VALUES (:idCliente, :idProducto, :fechaPedido, :fechaSeparada, :fechaEntrega, :estadoPedido, :contrato)";

            // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
            $stmt = $this->conexion->prepare($sql);

            // Asocia los parámetros con los valores proporcionados
            $stmt->bindParam(':idCliente', $idCliente);
            $stmt->bindParam(':idProducto', $idProducto);
            $stmt->bindParam(':fechaPedido', $fechaPedido);
            $stmt->bindParam(':fechaSeparada', $fechaSeparada);
            $stmt->bindParam(':fechaEntrega', $fechaEntrega);
            $stmt->bindParam(':estadoPedido', $estadoPedido);
            $stmt->bindParam(':contrato', $contrato);

            // Ejecuta la consulta preparada
            $stmt->execute();

            // Devuelve el ID del nuevo registro insertado
            return $this->conexion->lastInsertId();
        } catch (PDOException $e) {
            // Captura y muestra un mensaje de error si la operación falla
            die("Error al crear el pedido: " . $e->getMessage());
        }
    }

    // Método para obtener todos los pedidos de la base de datos
    public function obtenerPedidos()
    {
        try {
            // Consulta SQL para obtener todos los pedidos
            $sql = "SELECT * FROM pedidos";

            // Ejecuta la consulta directamente y retorna los resultados
            $stmt = $this->conexion->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Captura y muestra un mensaje de error si la operación falla
            die("Error al obtener los pedidos: " . $e->getMessage());
        }
    }

    // Método para obtener un pedido por su ID
    public function obtenerPedidoPorId($idPedido)
    {
        try {
            // Consulta SQL para obtener un pedido por su ID
            $sql = "SELECT * FROM pedidos WHERE id_pedido = :idPedido";

            // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
            $stmt = $this->conexion->prepare($sql);

            // Asocia el parámetro :idPedido con el valor proporcionado
            $stmt->bindParam(':idPedido', $idPedido);

            // Ejecuta la consulta preparada
            $stmt->execute();

            // Retorna el resultado de la consulta como un array asociativo
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Captura y muestra un mensaje de error si la operación falla
            die("Error al obtener el pedido por ID: " . $e->getMessage());
        }
    }

    // Método para eliminar un pedido por su ID
    public function eliminarPedido($idPedido)
    {
        try {
            // Consulta SQL para eliminar un pedido por su ID
            $sql = "DELETE FROM pedidos WHERE id_pedido = :idPedido";

            // Prepara la consulta utilizando la conexión establecida en la clase padre (ConexionBD)
            $stmt = $this->conexion->prepare($sql);

            // Asocia el parámetro :idPedido con el valor proporcionado
            $stmt->bindParam(':idPedido', $idPedido);

            // Ejecuta la consulta preparada
            $stmt->execute();
        } catch (PDOException $e) {
            // Captura y muestra un mensaje de error si la operación falla
            die("Error al eliminar el pedido: " . $e->getMessage());
        }
    }
}
?>