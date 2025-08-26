<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Intervalo</title>
</head>
<body>
    <h2>Resultado do Intervalo</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['x']) && isset($_POST['y']) && is_numeric($_POST['x']) && is_numeric($_POST['y'])) {
            
            $x = (int)$_POST['x'];
            $y = (int)$_POST['y'];

            $inicio = min($x, $y);
            $fim = max($x, $y);

            echo "<p>Os números inteiros entre $x e $y são:</p>";
            echo "<p>";

            for ($i = $inicio; $i <= $fim; $i++) {
                echo $i . " ";
            }

            echo "</p>";

        } else {
            echo "<p>Por favor, forneça dois valores numéricos inteiros válidos.</p>";
        }
    } else {
        echo "<p>Nenhum dado recebido. Utilize o formulário.</p>";
    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>