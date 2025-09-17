<?php
require_once "model/Postulacion.php";

class PostulacionController {
    public function registrarPostulacion($usuario_id, $vacante_id) {
        $postulacion = new Postulacion();
        return $postulacion->registrar($usuario_id, $vacante_id);
    }

    public function misPostulaciones($usuario_id) {
        $postulacion = new Postulacion();
        return $postulacion->listarPorUsuario($usuario_id);
    }
}
?>
