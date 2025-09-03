<?php
require_once "model/Vacante.php";

class EditarVacanteController {
    public function editarVacante($id, $titulo, $descripcion) {
        $vacante = new Vacante();
        return $vacante->editar($id, $titulo, $descripcion);
    }
}
?>
