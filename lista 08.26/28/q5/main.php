<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Idade</title>
</head>
<body>
    <h2>Sua Idade Atual</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['nome']) && !empty($_POST['nascimento'])) {
            $nome = $_POST['nome'];
            $dataNascimento = $_POST['nascimento'];

            $dataNascObj = new DateTime($dataNascimento);
            $dataAtualObj = new DateTime('now');

            $intervalo = $dataNascObj->diff($dataAtualObj);
            
            $idade = $intervalo->y;

            echo "<p>Olá, " . htmlspecialchars($nome) . ". Você tem <strong>" . $idade . "</strong> anos.</p>";

        } else {
            echo "<p>Por favor, preencha todos os campos do formulário.</p>";
        }
    } else {
        echo "<p>Nenhum dado recebido. Utilize o formulário.</p>";
    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>