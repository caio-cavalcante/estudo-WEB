<?php

function validaCampoInformado($valor, $nomeCampo) {
    if (!isset($valor)) {
        return "O campo $nomeCampo não foi informado.";
    }
    return null;
}

function validaCampoVazio($valor, $nomeCampo) {
    if (trim($valor) === '') {
        return "O campo $nomeCampo é obrigatório.";
    }
    return null;
}

function validaEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "O campo Email não contém um endereço de email válido.";
    }
    return null;
}

function validaApenasNumeros($valor, $nomeCampo) {
    $valorSemFormatacao = preg_replace('/[^0-9]/', '', $valor);
    if (!ctype_digit($valorSemFormatacao)) {
        return "O campo $nomeCampo deve conter apenas números.";
    }
    return null;
}

function validaTamanhoMaximo($valor, $nomeCampo, $tamanho) {
    if (strlen($valor) > $tamanho) {
        return "O campo $nomeCampo não pode ter mais de $tamanho caracteres.";
    }
    return null;
}

function comparaSenhas($senha, $confirmaSenha) {
    if ($senha !== $confirmaSenha) {
        return "A senha e a confirmação de senha não coincidem.";
    }
    return null;
}

function validaCPF($cpf) {
    $cpfNumerico = preg_replace('/[^0-9]/', '', $cpf);
    if (strlen($cpfNumerico) != 11) {
        return "O CPF deve conter exatamente 11 dígitos numéricos.";
    }
    return null;
}

?>