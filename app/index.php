<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema de Pedidos</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script defer src="../assets/js/main.js"></script>
</head>
<body>
    <header class="top-bar">
        <div class="logo">Sistema de Pedidos</div>
        <nav class="nav-bar">
            <ul>
                <li class="dropdown">
                    <a href="#">Restaurante</a>
                    <ul class="submenu">
                        <li><a href="pedidos/mostrador.php">Mostrador</a></li>
                        <li><a href="pedidos/delivery.php">Delivery</a></li>
                        <li><a href="pedidos/mesas.php">Mesas</a></li>
                    </ul>
                </li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="productos/productos.php">Productos</a></li>
                <li><a href="clientes/clientes.php">Clientes</a></li>
                <li><a href="proveedores/proveedores.php">Proveedores</a></li>
                <li><a href="reportes/reportes.php">Reportes</a></li>
                <li><a href="monitor_cocina/monitor.php">Monitor de Cocina</a></li>
                <li><a href="configuraciones/config.php">Configuraciones</a></li>
            </ul>
        </nav>
        <div class="user-info">
            <span>Bienvenido, <?= $_SESSION['usuario'] ?></span>
            <a href="usuarios/logout.php" class="logout-btn">Cerrar sesión</a>
        </div>
    </header>

    <main class="content">
        <h1>Bienvenido al Sistema de Pedidos</h1>
        <p>Selecciona una opción en el menú para comenzar.</p>
    </main>
</body>
</html>