<?php
session_start();

$usuario_correto = "admin";
$senha_correta = "1234";

$usuario_post = $_POST['usuario'];
$senha_post = $_POST['senha'];

if ($usuario_post == $usuario_correto && $senha_post == $senha_correta) {
    $_SESSION['usuario'] = $usuario_post;
    header("Location: index.php");
    exit();
} else {
    header("Location: login.php?erro=1");
    exit();
}
?>