<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; }
        form { max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>

    <form action="verifica.php" method="post">
        <h2>Formulário de Cadastro</h2>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        
        <label for="nascimento">Data de nascimento:</label>
        <input type="date" id="nascimento" name="nascimento">

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">

        <label for="confirma_senha">Confirma senha:</label>
        <input type="password" id="confirma_senha" name="confirma_senha">
        
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">
        
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
        
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" placeholder="XXXXX-XXX">
        
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX">

        <button type="submit">Enviar Cadastro</button>
    </form>

</body>
</html>