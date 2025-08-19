<?php

header('Content-Type: text/html; charset=utf-8');

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = time();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datas em Português com PHP</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 2em auto;
            padding: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exibindo Datas</h1>

        <p>
            <strong>em inglês</strong><br>
            <?php echo date('Y-m-d H:i:s'); ?><br>
            <?php echo date('l, F j, Y'); ?>
        </p>

        <p>
            <strong>em português</strong><br>
            <?php echo utf8_encode(strftime('%A, %d de %B de %Y', $dataAtual)); ?>
        </p>
    </div>
</body>
</html>