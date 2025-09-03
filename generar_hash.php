<?php
// Generar un hash de contraseña (para registrar usuarios manualmente en la BD)
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    echo password_hash($password, PASSWORD_BCRYPT);
}
?>
<form method="post">
    <input type="text" name="password" placeholder="Contraseña">
    <button type="submit">Generar Hash</button>
</form>
