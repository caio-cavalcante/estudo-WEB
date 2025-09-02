<?php

$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

setcookie("nome_usuario", $nome, time() + 3600, "/");
setcookie("cidade_nascimento", $cidade, time() + 3600, "/");

header("Location: mensagem.php");
exit;

?>