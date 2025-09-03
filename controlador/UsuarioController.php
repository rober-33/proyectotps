<?php
require_once "model/Usuario.php";

class UsuarioController {
    public function registrarUsuario($nombre, $correo, $password) {
        $usuario = new Usuario();
        return $usuario->registrar($nombre, $correo, $password);
    }
}
?>
