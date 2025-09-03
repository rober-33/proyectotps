<?php
require_once "model/Vacante.php";

class EliminarVacanteController {
    public function eliminarVacante($id) {
        $vacante = new Vacante();
        return $vacante->eliminar($id);
    }
}
?>
