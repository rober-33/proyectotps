<?php
require_once "model/Vacante.php";

class VacanteController {
    public function registrarVacante($titulo, $descripcion, $empresa) {
        $vacante = new Vacante();
        return $vacante->registrar($titulo, $descripcion, $empresa);
    }

    public function listarVacantes() {
        $vacante = new Vacante();
        return $vacante->listar();
    }
}
?>
