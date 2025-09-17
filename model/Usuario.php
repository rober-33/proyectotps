<?php
require_once "config/Conexion.php";

class Usuario {
    public function registrar($nombre, $correo, $password) {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO usuarios (nombre, correo, password) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $hash = password_hash($password, PASSWORD_BCRYPT);
        return $stmt->execute([$nombre, $correo, $hash]);
    }

    public function verificarLogin($correo, $password) {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['password'])) {
            return $usuario;
        }
        return false;
    }
}
?>
