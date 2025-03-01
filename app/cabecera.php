<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['usuario'])) {
    header('Location: ../../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Sistema de Pedidos</title>
    <link rel='stylesheet' href='../../assets/css/style.css'>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href='../pedidos/pedidos.php'>Pedidos</a></li>
                <li><a href='../productos/productos.php'>Productos</a></li>
                <li><a href='../proveedores/proveedores.php'>Proveedores</a></li>
                <li><a href='../usuarios/usuarios.php'>Usuarios</a></li>
                <li class='usuario'>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']) ?></li>
                <li><a href='../usuarios/logout.php'>Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>