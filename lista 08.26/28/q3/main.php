<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <h2>Resultados das Operações</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['num1']) && isset($_POST['num2']) && is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $soma = $num1 + $num2;
            $subtracao = $num1 - $num2;
            $multiplicacao = $num1 * $num2;
            
            echo "<p>$num1 + $num2 = <strong>$soma</strong></p>";
            echo "<p>$num1 - $num2 = <strong>$subtracao</strong></p>";
            echo "<p>$num1 * $num2 = <strong>$multiplicacao</strong></p>";

            if ($num2 != 0) {
                $divisao = $num1 / $num2;
                echo "<p>$num1 / $num2 = <strong>$divisao</strong></p>";
            } else {
                echo "<p>Divisão: <strong>Não é possível dividir por zero.</strong></p>";
            }
        } else {
            echo "<p>Por favor, forneça dois valores numéricos válidos.</p>";
        }
    } else {
        echo "<p>Nenhum dado recebido. Utilize o formulário.</p>";
    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>