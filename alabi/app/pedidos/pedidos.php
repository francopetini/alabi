<?php
session_start();
include '../../config/db.php';

$query = $pdo->query("SELECT * FROM pedidos ORDER BY fecha DESC");
$pedidos = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Pedidos</title>
    <link rel='stylesheet' href='../../assets/css/style.css'>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <table class='orders-table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Estado</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $pedido['id'] ?></td>
                <td><?= $pedido['cliente'] ?></td>
                <td><?= $pedido['producto'] ?></td>
                <td><?= $pedido['estado'] ?></td>
                <td><?= $pedido['fecha'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>