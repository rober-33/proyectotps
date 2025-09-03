<?php
require_once "model/Usuario.php";

class LoginController {
    public function mostrarLogin() {
        require_once "view/login.php";
    }

    public function login($correo, $password) {
        $usuario = new Usuario();
        $resultado = $usuario->verificarLogin($correo, $password);
        if ($resultado) {
            session_start();
            $_SESSION['usuario'] = $resultado;
            header("Location: view/dashboard.php");
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: ../index.php");
    }
}
?>
