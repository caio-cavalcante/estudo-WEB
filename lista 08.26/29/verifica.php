<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Dados</title>
    <style>
        body { font-family: sans-serif; }
        .success { color: green; border: 1px solid green; padding: 15px; }
        .error { color: red; border: 1px solid red; padding: 15px; }
        .error ul { list-style-type: none; padding: 0; }
    </style>
</head>
<body>
    <h1>Verificação dos Dados do Formulário</h1>
    <?php
    require_once 'funcoes.php';

    $erros = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $nascimento = $_POST['nascimento'] ?? '';
        $senha = $_POST['senha'] ?? '';
        $confirma_senha = $_POST['confirma_senha'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        $login = $_POST['login'] ?? '';
        $cep = $_POST['cep'] ?? '';
        $endereco = $_POST['endereco'] ?? '';
        $cpf = $_POST['cpf'] ?? '';

        if ($erro = validaCampoVazio($nome, 'Nome')) $erros[] = $erro;
        if ($erro = validaTamanhoMaximo($nome, 'Nome', 100)) $erros[] = $erro;

        if ($erro = validaCampoVazio($email, 'Email')) {
            $erros[] = $erro;
        } else {
            if ($erro = validaEmail($email)) $erros[] = $erro;
        }

        if ($erro = validaCampoVazio($nascimento, 'Data de nascimento')) $erros[] = $erro;
        
        if ($erro = validaCampoVazio($senha, 'Senha')) $erros[] = $erro;
        if ($erro = comparaSenhas($senha, $confirma_senha)) $erros[] = $erro;

        if ($erro = validaCampoVazio($telefone, 'Telefone')) $erros[] = $erro;
        if ($erro = validaApenasNumeros($telefone, 'Telefone')) $erros[] = $erro;

        if ($erro = validaCampoVazio($login, 'Login')) $erros[] = $erro;
        if ($erro = validaTamanhoMaximo($login, 'Login', 20)) $erros[] = $erro;
        
        if ($erro = validaCampoVazio($cep, 'CEP')) $erros[] = $erro;
        if ($erro = validaApenasNumeros($cep, 'CEP')) $erros[] = $erro;

        if ($erro = validaCampoVazio($endereco, 'Endereço')) $erros[] = $erro;

        if ($erro = validaCampoVazio($cpf, 'CPF')) {
            $erros[] = $erro;
        } else {
            if ($erro = validaCPF($cpf)) $erros[] = $erro;
        }
        
        if (empty($erros)) {
            echo '<div class="success"><h2>Cadastro realizado com sucesso!</h2><p>Todos os dados foram validados.</p></div>';
        } else {
            echo '<div class="error"><h2>Foram encontrados os seguintes erros:</h2><ul>';
            foreach ($erros as $e) {
                echo "<li>$e</li>";
            }
            echo '</ul></div>';
        }

    } else {
        echo '<p>Nenhum dado foi submetido. Por favor, preencha o <a href="formulario.php">formulário</a>.</p>';
    }
    ?>
    <br>
    <a href="formulario.php">Voltar ao formulário</a>
</body>
</html>