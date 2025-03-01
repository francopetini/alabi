<?php
// Página de inicio de sesión
session_start();
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login - Sistema de Pedidos</title>
    <link rel='stylesheet' href='../assets/css/style.css'>
</head>
<body>
    <form action='app/Usuarios/login.php' method='POST'>
        <h2>Iniciar Sesión</h2>
        <input type='text' name='usuario' placeholder='Usuario' required>
        <input type='password' name='password' placeholder='Contraseña' required>
        <button type='submit'>Ingresar</button>
    </form>
</body>
</html>