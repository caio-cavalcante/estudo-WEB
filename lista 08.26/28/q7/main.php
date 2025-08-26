<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do seu IMC</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['peso']) && isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {
            
            $peso = (float)$_POST['peso'];
            $altura = (float)$_POST['altura'];
            $classificacao = '';

            if ($peso > 0 && $altura > 0) {
                $imc = $peso / ($altura * $altura);

                if ($imc < 16) {
                    $classificacao = 'Magreza grave';
                } elseif ($imc < 17) {
                    $classificacao = 'Magreza moderada';
                } elseif ($imc < 18.5) {
                    $classificacao = 'Magreza leve';
                } elseif ($imc < 25) {
                    $classificacao = 'Saudável';
                } elseif ($imc < 30) {
                    $classificacao = 'Sobrepeso';
                } elseif ($imc < 35) {
                    $classificacao = 'Obesidade Grau I';
                } elseif ($imc < 40) {
                    $classificacao = 'Obesidade Grau II (severa)';
                } else {
                    $classificacao = 'Obesidade Grau III (mórbida)';
                }
                
                echo "<p>Seu IMC é: <strong>" . number_format($imc, 2, ',', '.') . "</strong></p>";
                echo "<p>Classificação: <strong>" . $classificacao . "</strong></p>";

            } else {
                echo "<p>O peso e a altura devem ser valores positivos.</p>";
            }
        } else {
            echo "<p>Por favor, forneça valores numéricos válidos para peso e altura.</p>";
        }
    } else {
        echo "<p>Nenhum dado recebido. Utilize o formulário.</p>";
    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>