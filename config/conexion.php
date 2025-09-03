<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $dbname = "lajagua";
        $usuario = "root";
        $password = "";

        try {
            $conexion = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            die();
        }
    }
}
?>
