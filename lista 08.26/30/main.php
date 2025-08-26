<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração de Funções de String em PHP</title>
    <style>
        body { 
            font-family: sans-serif; 
            line-height: 1.6; 
            max-width: 900px; 
            margin: 20px auto; 
            color: #333; 
        }
        h1 { 
            text-align: center; color: #0056b3; 
        }
        h2 { 
            color: #0056b3;
            border-bottom: 2px solid #0056b3; 
            padding-bottom: 5px; 
        }
        p { 
            margin: 5px 0; 
        }
        b { 
            color: #D6336C; 
        }
        code { 
            background-color: #f4f4f4; 
            padding: 2px 5px; 
            border-radius: 3px; 
        }
        pre { 
            background-color: #f4f4f4; 
            padding: 10px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
        }
        hr { 
            border: 0; 
            height: 1px; 
            background: #ccc; 
            margin: 25px 0; 
        }
    </style>
</head>
<body>
    <h1>Demonstração de Funções de String em PHP</h1>

    <?php

    echo '<h2>strtoupper()</h2>';
    echo '<p><b>Descrição:</b> Converte todos os caracteres de uma string para maiúsculas.</p>';
    $str_upper = "Este texto será convertido para maiúsculas.";
    echo '<p><b>Resultado:</b> ' . strtoupper($str_upper) . '</p>';

    echo '<hr>';

    echo '<h2>strtolower()</h2>';
    echo '<p><b>Descrição:</b> Converte todos os caracteres de uma string para minúsculas.</p>';
    $str_lower = "ESTE TEXTO SERÁ CONVERTIDO PARA MINÚSCULAS.";
    echo '<p><b>Resultado:</b> ' . strtolower($str_lower) . '</p>';
    
    echo '<hr>';

    echo '<h2>ucfirst()</h2>';
    echo '<p><b>Descrição:</b> Converte o primeiro caractere de uma string para maiúsculo.</p>';
    $str_ucfirst = "apenas a primeira letra ficará maiúscula.";
    echo '<p><b>Resultado:</b> ' . ucfirst($str_ucfirst) . '</p>';

    echo '<hr>';

    echo '<h2>ucwords()</h2>';
    echo '<p><b>Descrição:</b> Converte o primeiro caractere de cada palavra em uma string para maiúsculo.</p>';
    $str_ucwords = "primeira letra de cada palavra.";
    echo '<p><b>Resultado:</b> ' . ucwords($str_ucwords) . '</p>';
    
    echo '<hr>';

    echo '<h2>strlen()</h2>';
    echo '<p><b>Descrição:</b> Retorna o número de bytes (tamanho) de uma string.</p>';
    $str_len = "Esta string tem 30 caracteres.";
    echo "<p>A string '$str_len' tem <b>" . strlen($str_len) . "</b> bytes de comprimento.</p>";

    echo '<hr>';

    echo '<h2>str_word_count()</h2>';
    echo '<p><b>Descrição:</b> Conta o número de palavras em uma string.</p>';
    $str_word = "Vamos contar quantas palavras existem aqui.";
    echo "<p>A string '$str_word' tem <b>" . str_word_count($str_word) . "</b> palavras.</p>";

    echo '<hr>';

    echo '<h2>str_replace()</h2>';
    echo '<p><b>Descrição:</b> Substitui todas as ocorrências de uma substring por outra.</p>';
    $str_replace = "Eu gosto de programar em Java, pois Java é muito versátil.";
    echo '<p><b>Original:</b> ' . $str_replace . '</p>';
    echo '<p><b>Resultado:</b> ' . str_replace("Java", "PHP", $str_replace) . '</p>';

    echo '<hr>';

    echo '<h2>strpos()</h2>';
    echo '<p><b>Descrição:</b> Encontra a posição da primeira ocorrência de uma substring (índice começa em 0).</p>';
    $str_pos = "Encontre a palavra 'mundo' nesta frase. Olá mundo!";
    $posicao = strpos($str_pos, "mundo");
    echo "<p>Na frase '$str_pos', a palavra 'mundo' foi encontrada na posição (índice): <b>$posicao</b></p>";

    echo '<hr>';

    echo '<h2>substr()</h2>';
    echo '<p><b>Descrição:</b> Retorna uma parte (substring) de uma string.</p>';
    $str_sub = "Pegando apenas uma parte da string.";
    echo '<p><b>Original:</b> ' . $str_sub . '</p>';
    echo "<p>Extraindo 11 caracteres a partir do índice 8: <b>'" . substr($str_sub, 8, 11) . "'</b></p>";

    echo '<hr>';

    echo '<h2>explode()</h2>';
    echo '<p><b>Descrição:</b> Divide uma string em várias strings, retornando um array. Útil para CSV.</p>';
    $str_explode = "Maçã,Banana,Laranja,Morango";
    echo "<p>String original: '<code>$str_explode</code>'</p>";
    echo "<p>Resultado em Array:</p>";
    $array_frutas = explode(",", $str_explode);
    echo '<pre>';
    print_r($array_frutas);
    echo '</pre>';

    echo '<hr>';

    echo '<h2>trim()</h2>';
    echo '<p><b>Descrição:</b> Remove espaços em branco do início e do final de uma string.</p>';
    $str_trim = "   Este texto tem espaços no início e no fim.   ";
    echo "<p>Original com espaços: '<code>" . htmlspecialchars($str_trim) . "</code>'</p>";
    echo "<p>Resultado após o trim(): '<code>" . trim($str_trim) . "</code>'</p>";

    echo '<hr>';

    echo '<h2>str_pad()</h2>';
    echo '<p><b>Descrição:</b> Preenche uma string com outra string até um determinado comprimento.</p>';
    $str_pad = "ID: 45";
    echo '<p><b>Original:</b> ' . $str_pad . '</p>';
    echo "<p>Preenchendo à esquerda com '0' até o comprimento de 15: <b>" . str_pad($str_pad, 15, "0", STR_PAD_LEFT) . "</b></p>";

    echo '<hr>';

    echo '<h2>number_format()</h2>';
    echo '<p><b>Descrição:</b> Formata um número com milhares agrupados e casas decimais.</p>';
    $numero = 1234567.89;
    echo "<p>O número <b>$numero</b> formatado para o padrão brasileiro é: <b>" . number_format($numero, 2, ',', '.') . "</b></p>";
    
    echo '<hr>';
    
    echo '<h2>implode()</h2>';
    echo '<p><b>Descrição:</b> Junta os elementos de um array em uma única string, usando um separador.</p>';
    $array_implode = ['Juntando', 'os', 'elementos', 'do', 'array', 'em', 'uma', 'frase.'];
    echo '<p>Array original:</p>';
    echo '<pre>'; print_r($array_implode); echo '</pre>';
    echo "<p><b>Resultado:</b> " . implode(" ", $array_implode) . "</p>";

    ?>
</body>
</html>