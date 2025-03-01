<?php
session_start();
include 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $nombre = trim($_POST['nombre']);

    $stmt = $pdo->prepare('INSERT INTO usuarios (usuario, password, nombre, rol) VALUES (:usuario, :password, :nombre, "empleado")');
    $stmt->execute([
        'usuario' => $usuario,
        'password' => $password,
        'nombre' => $nombre
    ]);

    echo 'Registro exitoso. <a href="index.php">Inicia sesión aquí</a>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Registro</h2>
        <form action="registro.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre Completo" required>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a></p>
    </div>
</body>
</html>