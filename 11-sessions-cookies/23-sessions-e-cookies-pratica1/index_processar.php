<?php

session_start();

$usuariosCadastrados = [
    [
        "nome" => "Pedro Leandro",
        "email" => "pedro@email.com",
        "senha" => "12345abc"
    ],
    [
        "nome" => "Emily Vitória",
        "email" => "emily@email.com",
        "senha" => "12345abc"
    ],
    [
        "nome" => "Hellison Ferreira",
        "email" => "enzo@email.com",
        "senha" => "12345abc"
    ],
    [
        "nome" => "Amaury Damasceno",
        "email" => "amaury@email.com",
        "senha" => "12345abc"
    ]
];


$mensagem = "";

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$senha = $_POST["senha"] ?? "";

if (!$email) {
    $mensagem = "Erro ao entrar: e-mail invalido.";
}

$usuarioEncontrado = null;

foreach ($usuariosCadastrados as $usuario) {
    if ($usuario["email"] === $email && $usuario["senha"] === $senha) {
        $usuarioEncontrado = $usuario;
    }
    
}

if ($usuarioEncontrado === null) {
    $mensagem = "Erro ao entrar: e-mail ou senha inválidos!";
   } 

//se deu tudo errado, existente uma mensagem preenchida (não vazia)
if(!empty($mensagem)) {
    
$_SESSION["mensagem"] = $mensagem;
header("Location: index.php"); 
exit;
}

$_SESSION["email"] = $usuarioEncontrado["email"];

header("Location: area-restrita.php");
exit;
