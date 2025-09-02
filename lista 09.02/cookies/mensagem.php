<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagem com Cookies</title>
</head>
<body>
    <p>
        <?php
        $nome = $_COOKIE['nome_usuario'];
        $cidade = $_COOKIE['cidade_nascimento'];
        echo "$nome nasceu em $cidade";
        ?>
    </p>
</body>
</html>