<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>
    <h2>
        <?php
        echo "Seja bem-vindo " . $_SESSION['usuario'];
        ?>
    </h2>
    <p>Você está na área logada do sistema.</p>
    <a href="logout.php">Sair (Logout)</a>
</body>
</html>