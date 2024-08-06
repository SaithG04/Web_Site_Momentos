<?php
// Definición de la clase de conexión a la base de datos
class ConexionBD
{
    // Propiedades privadas para la configuración de la conexión
    private $host = "bxwjvaegr7s9mb6mlddz-mysql.services.clever-cloud.com";
    private $usuario = "uhdzdnv4iuddnzws";
    private $clave = "0iWneEmmNmh8OPlKNQmJ";
    private $nombreBD = "bxwjvaegr7s9mb6mlddz";

    // Propiedad protegida para almacenar la conexión PDO
    protected $conexion;

    // Constructor de la clase que establece la conexión
    public function __construct()
    {
        try {
            // Intenta crear una conexión PDO con la configuración proporcionada
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->nombreBD}", $this->usuario, $this->clave);

            // Establece el modo de error y excepciones para la conexión
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Captura y muestra un mensaje de error si la conexión falla
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    // Método para cerrar la conexión
    public function cerrarConexion()
    {
        // Establece la conexión a null para cerrarla
        $this->conexion = null;
    }
    //caca de burro
}
?>

