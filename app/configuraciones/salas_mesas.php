<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas Mesas</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <?php include '../cabecera.php'; ?>
    <main class="content">
        <h1>Salas Mesas</h1>
        <p>Contenido de Salas Mesas en construcción.</p>
    </main>
</body>
</html>
