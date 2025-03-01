<?php
session_start();
include '../../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    $stmt = $pdo->prepare('SELECT id, usuario, password FROM usuarios WHERE usuario = :usuario');
    $stmt->execute(['usuario' => $usuario]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['id_usuario'] = $user['id'];
        header('Location: ../index.php');
        exit();
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}
?>