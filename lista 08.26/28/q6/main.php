<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
</head>
<body>
    <h2>Resultado da Média</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['numeros']) && !empty($_POST['numeros'])) {
            $numeros_string = $_POST['numeros'];
            
            $numeros_array = explode(',', $numeros_string);
            
            $soma = 0;
            $quantidade = 0;
            $numeros_validos = [];
            $entrada_invalida = false;

            foreach ($numeros_array as $num_str) {
                $num_limpo = trim($num_str);
                
                if (is_numeric($num_limpo)) {
                    $soma += (float)$num_limpo;
                    $quantidade++;
                    $numeros_validos[] = $num_limpo;
                } elseif ($num_limpo !== '') {
                    $entrada_invalida = true;
                    break;
                }
            }

            if ($entrada_invalida) {
                echo "<p>Erro: Certifique-se de inserir apenas números separados por vírgula.</p>";
            } elseif ($quantidade > 0) {
                $media = $soma / $quantidade;
                $numeros_formatados = implode(', ', $numeros_validos);
                echo "<p>Os números fornecidos foram: <strong>$numeros_formatados</strong></p>";
                echo "<p>A média é: <strong>" . number_format($media, 2, ',', '.') . "</strong></p>";
            } else {
                echo "<p>Nenhum número válido foi inserido.</p>";
            }
        } else {
            echo "<p>Por favor, preencha o campo com os números.</p>";
        }
    } else {
        echo "<p>Nenhum dado recebido. Utilize o formulário.</p>";
    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>