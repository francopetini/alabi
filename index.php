<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alabi - Sistema de Pedidos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/main.js"></script>
</head>
<body>
    <header class="top-bar">
        <div class="logo">Alabi</div>
        <nav class="nav-bar">
            <ul>
                <li class="dropdown" onclick="toggleSubmenu('restaurante')">
                    <a href="#">Restaurante</a>
                    <ul id="submenu-restaurante" class="submenu">
                        <li><a href="#" onclick="loadPage('app/pedidos/mostrador.php')">Mostrador</a></li>
                        <li><a href="#" onclick="loadPage('app/pedidos/delivery.php')">Delivery</a></li>
                        <li><a href="#" onclick="loadPage('app/pedidos/mesas.php')">Mesas</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="loadPage('app/ventas/ventas.php')">Ventas</a></li>
                <li><a href="#" onclick="loadPage('app/productos/productos.php')">Productos</a></li>
                <li><a href="#" onclick="loadPage('app/clientes/clientes.php')">Clientes</a></li>
                <li><a href="#" onclick="loadPage('app/proveedores/proveedores.php')">Proveedores</a></li>
                <li><a href="#" onclick="loadPage('app/reportes/reportes.php')">Reportes</a></li>
                <li><a href="#" onclick="loadPage('app/monitor_cocina/monitor.php')">Monitor de Cocina</a></li>
                <li><a href="#" onclick="loadPage('app/configuraciones/config.php')">Configuraciones</a></li>
            </ul>
        </nav>
        <div class="user-info">
            <span>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']) ?></span>
            <a href="app/usuarios/logout.php" class="logout-btn">Cerrar sesión</a>
        </div>
    </header>

    <main id="content" class="content">
        <h1>Bienvenido a Alabi</h1>
        <p>Selecciona una opción en el menú para comenzar.</p>
    </main>

    <script>
        function toggleSubmenu(menu) {
            document.getElementById("submenu-" + menu).classList.toggle("active");
        }

        function loadPage(page) {
            fetch(page)
                .then(response => response.text())
                .then(data => {
                    document.getElementById("content").innerHTML = data;
                })
                .catch(error => console.error("Error al cargar la página:", error));
        }
    </script>
</body>
</html>
