<?php
require_once "config/Conexion.php";

class Postulacion {
    public function registrar($usuario_id, $vacante_id) {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO postulaciones (usuario_id, vacante_id) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$usuario_id, $vacante_id]);
    }

    public function listarPorUsuario($usuario_id) {
        $conexion = Conexion::conectar();
        $sql = "SELECT v.titulo, v.descripcion, v.empresa 
                FROM postulaciones p
                JOIN vacantes v ON p.vacante_id = v.id
                WHERE p.usuario_id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
