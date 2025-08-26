<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação</title>
    <style>
        body { font-family: sans-serif; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>

    <h2>Resultado da Verificação de Idade</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['idade']) && !empty($_POST['idade'])) {
            
            $idade = $_POST['idade'];

            if (is_numeric($idade)) {

                $idade_int = (int)$idade;
                
                if ($idade_int >= 18) {
                    echo "<p class='success'>Você tem $idade_int anos. Portanto, é <strong>Maior de idade</strong>.</p>";
                } else {
                    echo "<p class='success'>Você tem $idade_int anos. Portanto, é <strong>Menor de idade</strong>.</p>";
                }

            } else {
                
                echo "<p class='error'>Erro: O valor informado para a idade não é numérico. Por favor, digite apenas números.</p>";
            }

        } else {
            
            echo "<p class='error'>Erro: O campo idade não foi preenchido. Por favor, informe um valor.</p>";
        }

    } else {
        echo "<p class='error'>Nenhum dado recebido. Por favor, envie os dados através do formulário.</p>";
    }
    ?>

    <br>
    <a href="index.html">Voltar para o formulário</a>

</body>
</html>