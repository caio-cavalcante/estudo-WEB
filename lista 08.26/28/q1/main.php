<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
</head>
<body>

    <h2>Resultado do Aluno</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        if ($media >= 7) {
            $status = "Aprovado";
        } else {
            $status = "Reprovado";
        }

        echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
        echo "<p><strong>Média:</strong> " . number_format($media, 2, ',', '.') . "</p>";
        echo "<p><strong>Status:</strong> " . $status . "</p>";

    } else {
        echo "<p>Por favor, preencha o formulário para calcular a média.</p>";
    }
    ?>

    <br>
    <a href="index.html">Voltar para o formulário</a>

</body>
</html>